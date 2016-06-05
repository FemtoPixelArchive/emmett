<?php

/*
 * Disable fatal error during processes ... in theory
 */
function myErrorHandler($errno, $errstr, $errfile, $errline, $errcontext)
{
	return true;
}
set_error_handler("myErrorHandler");

/*
 * Load the file which contains the required class
 */
function __autoload($name)
{
	include_once(implode('/', explode('_', $name)) . '.php');
}

/*
 * Load default configuration (ROOT_DIR and directories to exclude)
 */
include("conf.php");

$classes = array();

$fails = array();


set_include_path(get_include_path() . PATH_SEPARATOR . ROOT_DIR);

/*
 * Parse DocComment to retrieve class names from
 */
function parse_PHPDoc($str) {
	$pattern = '#@(param|return|throws)[\s]+(?P<types>[^\s]+)#';
	
	$matches = array();
	$results = array();
	if (!preg_match_all($pattern, $str, $matches)) {
		return;
	}

	foreach ($matches['types'] as $types) {
		$results = array_merge($results, explode('|', $types));
	}
	return $results;
}

/*
 * Instantiate a new ReflectionClass with the $className
 * Retrieve dependencies from super class, implemented interfaces and DocComments
 * Skip process if class is internal PHP Core
 */
function parse_class($className)
{
	global $classes, $fails;
	
	/* If $className isn't instance of Reflection Class, instantiate this */
	if (!($className instanceof ReflectionClass)) {
		try
		{
			$class = new ReflectionClass($className);
		} catch(Exception $e)
		{
			$fails[] = $className;
			return;
		}
	} else {
		$class = $className;
		$className = $class->getName();
	}
	
	/* If current class is internal or already threat, skip */
	if ($class->isInternal() || array_key_exists($className, $classes)) {
		return;
	}

	$classes[$className]['instantiable'] = $class->IsInstantiable();
	
	/* Get Parent Class if exists */
	$parent = $class->getParentClass();
	if ($parent && !$parent->isInternal()) {
		if (!in_array($parent->getName(), $classes[$className]['dependencies']))
			$classes[$className]['dependencies'][] = $parent->getName();
		parse_class($parent);
	}
	
	/* Get implemented interfaces */
	foreach ($class->getInterfaces() as $interface) {
		if (!$interface->isInternal()) {
			if (!in_array($interface->getName(), $classes[$className]['dependencies']))
				$classes[$className]['dependencies'][] = $interface->getName();
			parse_class($interface);
		}
	}
	
	/* Get and parse DocComment of class */
	foreach (parse_PHPDoc($class->getDocComment()) as $type) {
		$type = new ReflectionClass($type);
		if (!$type->isInternal()) {
			if (!in_array($type->getName(), $classes[$className]['dependencies']) && $type->getName() != $className)
				$classes[$className]['dependencies'][] = $type->getName();
			parse_class($type);
		}
	}
	
	/* Get and parse DocComment of each methods */
	foreach ($class->getMethods() as $method) {
		foreach (parse_PHPDoc($method->getDocComment()) as $type) {
			try {
				$type = new ReflectionClass($type);
				if (!$type->isInternal()) {
					if (!in_array($type->getName(), $classes[$className]['dependencies']) && $type->getName() != $className)
						$classes[$className]['dependencies'][] = $type->getName();
					parse_class($type);
				}
			} catch (Exception $e) {
				continue;
			}
		}
	}
}

/*
 * Try to determine class name from path parameter and try to parse the class
 */
function parse_class_file($path) {
	global $classes;

	$pi = pathinfo($path);
	$className = implode('_', explode('/', str_replace('.' . $pi['extension'], '', substr(str_replace(ROOT_DIR, '', $path), 1)))) ;
	
	parse_class($className);
}

/*
 * Explore the directory and parse each PHP File or explore sub-directory 
 */
function explore_directory($path) {
	global $excluded;

	foreach (glob($path . '/*') as $name) {
		if ($name == '.svn') continue;
		
		if (is_dir($name) && !in_array($name, $excluded)) {
			explore_directory($name);
		}
		if (is_file($name)) {
			$pi = pathinfo($name);
			if (strtolower($pi['extension']) == 'php') {
				parse_class_file($name);
			}
		}
	}
}

explore_directory(ROOT_DIR);


ksort($classes);

/* Generate final output in 'inc_classes.php' file */
$final = '<?php $data = ' . var_export($classes, true) . ';';

file_put_contents('inc_classes.php', $final);


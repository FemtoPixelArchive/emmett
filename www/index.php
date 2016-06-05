<?php
define('ROOT_DIR', realpath(dirname(__FILE__).'/../'));//test//
$_SERVER['ENVIRONMENT'] = isset($_SERVER['ENVIRONMENT']) ? $_SERVER['ENVIRONMENT'] : 'local';
define('ENVIRONMENT', $_SERVER['ENVIRONMENT']);

set_include_path ( ROOT_DIR . '/library' 
				. PATH_SEPARATOR . get_include_path () );
require_once('Zend/Loader/Autoloader.php');
$loader = Zend_Loader_Autoloader::getInstance();

// Create application, bootstrap, and run
$application = new Zend_Application(
    ENVIRONMENT, 
    ROOT_DIR . '/application/application.ini'
);

$namespaces = array_merge(array(ucfirst($application->getOption('appname')) . '_'), $application->getOption('autoloaderNamespaces'));

if (strtotime('2012-04-28 21:30:00') <= time()) {
	$application->setAutoloaderNamespaces($namespaces)
				->bootstrap()
				->run();
} else {
	header('Location: http://www.facebook.com/EmmettFanPage');
}


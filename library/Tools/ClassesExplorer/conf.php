<?php 
/* ROOT_DIR definition */
define("ROOT_DIR", realpath(dirname(__FILE__) . '/../..'));

/* List of directories to ignore */
$excluded = array(
	ROOT_DIR . '/resources',
	ROOT_DIR . '/Tools', 
	ROOT_DIR . '/External',
	ROOT_DIR . '/Zend/Test',
);

/* List of packages with dependent classes */
$packages = array(
	'package_acl' => array(
		'label' => 'ACL',
		'classes' => array(
			'Marcel_Acl',
		),
	),
	'package_bo' => array(
		'label' => 'Back Office',
		'classes' => array(
			'Marcel_Backoffice_Acl',
			'Marcel_Backoffice_Config',
			'Marcel_Backoffice_Form_Autodiscover',
			'Marcel_Backoffice_Model',
			'Marcel_Backoffice_Db_Table_Row_Autodiscover',
			'Marcel_Backoffice_Form_Element_CustomSelect',
			'Marcel_Backoffice_Form_Autodiscover',
			'Marcel_Backoffice_Plugin_Auth',
			'Marcel_Backoffice_Db_Table_Autodiscover',
		),
	),
);
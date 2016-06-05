<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {
	
	protected function _initHeader() {
		error_reporting(E_ALL|E_STRICT);
		date_default_timezone_set ( 'Europe/Paris' );
		mb_internal_encoding('UTF-8');
	}

	protected function _initRegistry() {
		$registry = new Zend_Registry(array(), ArrayObject::ARRAY_AS_PROPS);
		Zend_Registry::setInstance($registry);
		return $registry;
	}
	
	protected function _initConfig() {
		$config = $this->getOptions();
		$this->bootstrap('registry');
		$registry = $this->getResource('registry');
		$registry->set ( 'config', $config );
		return $config;
	}
	
	/*protected function _initDatabase() {
		$this->bootstrap('registry');
		$registry = $this->getResource('registry');
		$dbResource = $this->getPluginResource('db');
		if ($dbResource) {
			$db = $dbResource->getDbAdapter();
			$db->setFetchMode(Zend_Db::FETCH_OBJ);
			$registry->database = $db;
			Zend_Db_Table::setDefaultAdapter($db);
			return $registry->database;
		}
	}*/
	
	protected function _initView() {
		$view = new Zend_View();
		$view->doctype(Zend_View_Helper_Doctype::HTML5);
		$view->headTitle('EMMETT')->setSeparator(' | ');
		$view->headMeta('FemtoPixel', 'author');
		$view->headMeta('UTF-8', 'UTF-8', 'charset');
		$view->headMeta('IE=edge,chrome=1', 'X-UA-Compatible');
		$view->headMeta('height=device-height, width=device-width, initial-scale=1.0', 'viewport');
		$view->navigation($this->getResource('nav'));
		
		$this->bootstrap('config');
		$config = $this->getResource('config');
		if (isset($config['views']['helpers']) && count($config['views']['helpers'])) {
			foreach ($config['views']['helpers'] as $prefix) {
				$view->addHelperPath(str_replace('_', '/', $prefix), $prefix);
			}
		}
		if (isset($config['appname']) && $config['appname']) {
			$view->addHelperPath($config['appname'] . '/View/Helper', $config['appname'] . '_View_Helper');
		}
		$viewRenderer = new Zend_Controller_Action_Helper_ViewRenderer();
		$viewRenderer->setView($view);
		Zend_Controller_Action_HelperBroker::addHelper($viewRenderer);
		return ($viewRenderer);
	}
	
/*	protected function _initRegistercache() {
		$this->bootstrap('registry');
		$this->bootstrap('config');
		$registry = $this->getResource('registry');
		$config = $this->getResource('config');
		
		if ($config['cache']['active']) {
			if ($this->getPluginResource('cachemanager')) {
				$cache = $this->getPluginResource('cachemanager')->getCacheManager()->getCache('apc');
				if ($cache) {
					Zend_Db_Table_Abstract::setDefaultMetadataCache($cache);
					$registry->set ( 'cache', $cache );
				}
			}
		}
	}*/
	
	/*protected function _initSearch() {
		Zend_Search_Lucene_Analysis_Analyzer::setDefault(new Zend_Search_Lucene_Analysis_Analyzer_Common_Utf8Num_CaseInsensitive());
		//Permit number search *alleluia*
		return $this;
	}*/

	protected function _initLayout() {
		$this->bootstrap('config');
		$config = $this->getResource('config');
		$layout = Zend_Layout::startMvc($config['views']);
		return $layout;
	}
	
	protected function _initPaginator() {
		Zend_Paginator::setDefaultScrollingStyle('Elastic');
		Zend_View_Helper_PaginationControl::setDefaultViewPartial('paginator.phtml');
	}
	
	protected function _initFront() {
		// setup controller
		$frontController = Zend_Controller_Front::getInstance ();

		// load routing rules configuration
		try {
			$config = new Zend_Config_Ini ( ROOT_DIR . '/application/routes.ini', 'all' );
			$router = $frontController->getRouter ();
			$router->addConfig ( $config, 'routes' );

			$frontController->setRouter ( $router );
		} catch (Zend_Exception $e) {
		}
		return $frontController;
	}
}
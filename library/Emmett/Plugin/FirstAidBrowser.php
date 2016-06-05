<?php
/**
 * Emmett Framework
 * 
 * @category   Emmett
 * @package    Emmett_Plugin
 * @author Jeremy MOULIN
 */

/**
 * @see Zend_Controller_Plugin_Abstract
 */
require_once('Zend/Controller/Plugin/Abstract.php');
/**
 * @see Zend_Controller_Front
 */
require_once('Zend/Controller/Front.php');

/**
 * @see Zend_Registry
 */
require_once('Zend/Registry.php');


/**
 * Browser compatibility check
 * 
 * @package Emmett_Plugin
 * 
 * @uses Zend_Controller_Plugin_Abstract
 * 
 * @author Jeremy MOULIN
 *
 */
class Emmett_Plugin_FirstAidBrowser extends Zend_Controller_Plugin_Abstract {
	
	
	/**
	 * (non-PHPdoc)
	 * @see library/Zend/Controller/Plugin/Zend_Controller_Plugin_Abstract#preDispatch()
	 * 
	 * @uses Zend_Session
	 * @uses Zend_Auth
	 * @uses Marcel_Acl
	 * @uses Zend_Controller_Front
	 * @uses Zend_Registry
	 */
	public function preDispatch(Zend_Controller_Request_Abstract $request) {
		if ($request->getModuleName() !== 'first-aid') {
			return;
		}
		try { 
			$userAgent = new Zend_Http_UserAgent;
			$device = $userAgent->getDevice();
			$browser = $device->getBrowser();
			$version = $device->getBrowserVersion();
		} catch (Zend_Http_UserAgent_Feature_Exception $e) {
			$browser = 'Safari Mobile';
			$version = '4';
		}

		$newExperiment = false;
		switch ($browser) {
			case 'Firefox' :
				$newExperiment = version_compare($version, '4', '>=');
				break;
			case 'Chrome' :
			case 'Chromium' :
				$newExperiment = true;
				break;
			case 'Safari':
			case 'Safari Mobile':
				$newExperiment = true;
				break;
			case 'Opera':
				$newExperiment = version_compare($version, '11', '>=');
				break;
			case 'Mozilla':
        $newExperiment = false;
        foreach (array('device_os_token', 'browser_token', 'compatibility_flag') as $section) {
          if ($device->hasFeature($section)) {
            $feature = $device->getFeature($section);
            if (preg_match('~^MSIE (.*)~', $feature, $version)) {
              $newExperiment = version_compare($version[1], '11', '>=');
            }
            if (preg_match('~^Trident/(.*)~', $feature, $version)) {
              $newExperiment = version_compare($version[1], '7', '>='); // >= Trident/7.0 (MSIE 11)
            }
          }
        }
				break;
			default:
				$newExperiment = false;
				break;
		}
		
		if (!($request->getModuleName() == 'first-aid' && $request->getControllerName() == 'index' && $request->getActionName() == 'advice')) {
			if (!isset($_COOKIE['firstaidexperiment']) && !$newExperiment) {
				$request->setModuleName('first-aid');
				$request->setControllerName('index');
				$request->setActionName('advice');
			}
			if (isset($_COOKIE['firstaidexperiment']) && $_COOKIE['firstaidexperiment']) {
				if (Zend_Controller_Action_HelperBroker::hasHelper('layout')) {
					Zend_Controller_Action_HelperBroker::getStaticHelper('layout')->setLayout('degraded');
				}
			}
		}
	}
}

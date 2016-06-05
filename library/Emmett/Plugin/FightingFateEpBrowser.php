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
class Emmett_Plugin_FightingFateEpBrowser extends Zend_Controller_Plugin_Abstract {
	
	
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
		if ($request->getModuleName() !== 'fighting-fate-ep') {
			return;
		}
		try { 
			$userAgent = new Zend_Http_UserAgent;
			$device = $userAgent->getDevice();
			$browser = $device->getBrowser();
			$version = $device->getBrowserVersion();
		} catch (Exception $e) {
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
				$newExperiment = version_compare($version, '8', '>=');
				break;
			case 'Opera':
				$newExperiment = version_compare($version, '12', '>=');
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
		
		if (!($request->getModuleName() == 'fighting-fate-ep' && $request->getControllerName() == 'index' && $request->getActionName() == 'advice')) {
			if (!isset($_COOKIE['fightingfateepexperiment']) && !$newExperiment) {
				$request->setModuleName('fighting-fate-ep');
				$request->setControllerName('index');
				$request->setActionName('advice');
			}
			if (isset($_COOKIE['fightingfateepexperiment']) && $_COOKIE['fightingfateepexperiment']) {
				if (Zend_Controller_Action_HelperBroker::hasHelper('layout')) {
					Zend_Controller_Action_HelperBroker::getStaticHelper('layout')->setLayout('degraded');
				}
			}
		}
	}
}

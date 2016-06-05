<?php

class IndexController extends Zend_Controller_Action {
	public function indexAction() {
		$this->_helper->viewRenderer->setNoRender();
		$this->_helper->layout()->disableLayout();
		
		$oToday = new DateTime();
		$oRememberedDate = null;
		$aDates = array(
      'new-logo' => new DateTime('2014-08-15 18:00:00'),
			'fighting-fate-ep' => new DateTime('2013-12-06 18:00:00'),
			'first-aid' => new DateTime('2012-04-28 21:30:00'),
		);
		$sModule = 'first-aid';
		foreach ($aDates as $sCurrentModule => $oCurrentDate) {
			if ($oCurrentDate <= $oToday && ($oCurrentDate >= $oRememberedDate || null == $oRememberedDate)) {
				$oRememberedDate = $oCurrentDate;
				$sModule = $sCurrentModule;
			}
		}
		
		$this->_redirect($this->view->url(array('controller' => 'index', 'action' => 'index', 'module' => $sModule), null, true));
	}
	
}
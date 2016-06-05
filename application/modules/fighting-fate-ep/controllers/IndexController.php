<?php
/**
 * Index Controller that render the init JSON
 * 
 * @author Jeremy MOULIN
 *
 * @uses Zend_Controller_Action
 *
 */
class FightingFateEp_IndexController extends Zend_Controller_Action {
	/**
	 * Home page
	 */
	public function indexAction() {
		$this->view->headTitle('Fighting Fate EP');
		$this->_helper->viewRenderer->setNoRender();
	}
	
	public function bandAction() {
		if (!$this->getRequest()->isXmlHttpRequest()) {
			$this->_redirect($this->view->url());
			exit;
		}
		
		$this->_helper->layout()->disableLayout();
		$member = $this->_getParam('member', 'emmett');
		$aMembers = array(
			'emmett' => 1,
			'cedric' => 1,
			'jay' => 1,
			'maxime' => 1,
			'romeo' => 1,
		);
		if (!isset($aMembers[$member])) {
			$member = 'emmett';
		}
		$this->renderScript('band/' . $member . '.phtml');
	}
	
	public function adviceAction () {
		$this->_helper->layout()->disableLayout();
		$userAgent = new Zend_Http_UserAgent;
		$this->view->device = $userAgent->getDevice();
		$decision = $this->_getParam('decision');
		$this->view->redirect = false;
		if ($decision != NULL) {
			setcookie('fightingfateepexperiment', ($decision == 'yes' ? '1' : '0'), time() + (60 * 60 * 24 * 7), '/');
			$this->view->redirect = true;
		}
	}
	
	public function downloadAction() {
		ini_set('max_execution_time', 0);
		$filename = dirname(__FILE__) . '/stats.txt';
		$file = fopen($filename, 'rb');
		$counter = fgets($file) + 1;
		fclose($filename);
		$file = fopen($filename, 'w');
		fputs($file, $counter);
		fclose($file);
		
		$filename = ROOT_DIR . '/files/Fighting Fate.zip';
		$this->_helper->viewRenderer->setNoRender(true);
		$this->_helper->layout()->disableLayout(true);
		$this->getResponse()
			->setHeader('Content-Disposition', 'attachment;filename="EMMETT - Fighting Fate.zip";')
			->setHeader('Content-Transfer-Encoding', 'binary')
			->setHeader('Expires', 0)
			->setHeader('Pragma', 'public')
			->setHeader('Content-Length', filesize($filename))
			->sendResponse();
		$file = fopen($filename, 'rb');
		do {
			$line = fgets($file, 1024);
			echo $line;
			ob_flush();
		} while(!feof($file));
		fclose($file);
	}
}
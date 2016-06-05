<?php
/**
 * Index Controller that render the init JSON
 * 
 * @author Jeremy MOULIN
 *
 * @uses Zend_Controller_Action
 *
 */
class NewLogo_IndexController extends Zend_Controller_Action {
	/**
	 * Home page
	 */
	public function indexAction() {
		$this->view->headTitle('New Logo');
		$this->_helper->viewRenderer->setNoRender();
	}
	
	public function downloadAlbumAction() {
		ini_set('max_execution_time', 0);
		$filename = dirname(__FILE__) . '/stats.txt';
		$file = fopen($filename, 'rb');
		$counter = fgets($file) + 1;
		fclose($filename);
		$file = fopen($filename, 'w');
		fputs($file, $counter);
		fclose($file);
		
		$filename = ROOT_DIR . '/files/Fighting Fate B-side.zip';
		$this->_helper->viewRenderer->setNoRender(true);
		$this->_helper->layout()->disableLayout(true);
		$this->getResponse()
			->setHeader('Content-Disposition', 'attachment;filename="EMMETT - Fighting Fate B-side.zip";')
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
	
	public function adviceAction () {
		$this->_helper->layout()->disableLayout();
		$userAgent = new Zend_Http_UserAgent;
		$this->view->device = $userAgent->getDevice();
		$decision = $this->_getParam('decision');
		$this->view->redirect = false;
		if ($decision != NULL) {
			setcookie('newlogoexperiment', ($decision == 'yes' ? '1' : '0'), time() + (60 * 60 * 24 * 7), '/');
			$this->view->redirect = true;
		}
	}
}
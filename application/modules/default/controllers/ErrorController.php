<?php
/**
 * Manage all errors on website
 * 
 * @author Jeremy MOULIN
 *
 * @uses Zend_Controller_Action
 */
class ErrorController extends Zend_Controller_Action {

	/**
	 * Catch all the errors and do the right action (sends a 404 error)
	 *
	 */
	public function errorAction() {
		$this->view->layout()->disableLayout();
		
		$content = '';
		$errors = $this->_getParam ( 'error_handler' );

		switch ($errors->type) {
			/*
			 * If controller doesn't exists
			 */
			case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_CONTROLLER :
			/*
			 * Action doesn't exists
			 */
			case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ACTION :
			/*
			 * Any other error
			 */
			default :
				$this->getResponse ()->setRawHeader ( 'HTTP/1.1 404 Not Found' );
				$content = $errors->exception->getMessage();
		}

		// Clear previous content
		$this->getResponse ()
				->setHeader('Expires', gmdate('D, d M Y H:i:s \G\M\T', time()), true)
				->setHeader('Pragma', 'no-cache, no-store, must-revalidate', true)
				->setHeader('Cache-Control', 'maxage=0', true);
		$this->getResponse ()->clearBody ();
		$this->view->error = $content;
	}
}
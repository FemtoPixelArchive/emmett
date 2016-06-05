<?php

class FirstAid_MiscController extends Zend_Controller_Action {
	public function init() {
		$this->view->headTitle(tr('Misc'));
		$this->view->action = $this->_request->getActionName();
		$this->view->infos = array(
			'lyrics' => array(
				'Crossing the line' => 'Crossing%20the%20line.pdf',
				'First aid' => 'First%20aid.pdf',
				'Friendshit' => 'Friendshit.pdf',
				'How Much?' => 'How%20much.pdf',
				'Human Nature' => 'Human%20Nature.pdf',
				'Leaving' => 'Leaving.pdf',
				'Mr Useless' => 'Mr%20Useless.pdf',
				'Surrogates' => 'Surrogates.pdf',
				'The Savior' => 'The%20Savior.pdf',
				'Thoughts' => 'Thoughts.pdf',
				'Waste of time' => 'Waste%20of%20time.pdf',
			),
			'bass' => array(
				'Crossing The Line' => array(
					'gpx' => 'Crossing%20The%20Line.gpx',
					'pdf' => 'Crossing%20The%20Line.pdf',
				),
				'First aid' => array(
					'gpx' => 'First%20Aid.gpx',
					'pdf' => 'First%20Aid.pdf',
				),
				'Friendshit' => array(
					'gpx' => 'Friendshit.gpx',
					'pdf' => 'Friendshit.pdf',
				),
				'How Much' => array(
					'gpx' => 'How%20Much.gpx',
					'pdf' => 'How%20Much.pdf',
				),
				'Human Nature' => array(
					'gpx' => 'Human%20Nature.gpx',
					'pdf' => 'Human%20Nature.pdf',
				),
				'Leaving' => array(
					'gpx' => 'Leaving.gpx',
					'pdf' => 'Leaving.pdf',
				),
				'Mr Useless' => array(
					'gpx' => 'Mr%20Useless.gpx',
					'pdf' => 'Mr%20Useless.pdf',
				),
				'Surrogates' => array(
					'gpx' => 'Surrogates.gpx',
					'pdf' => 'Surrogates.pdf',
				),
				'The Savior' => array(
					'gpx' => 'The%20Savior.gpx',
					'pdf' => 'The%20Savior.pdf',
				),
				'Thoughts' => array(
					'gpx' => 'Thoughts.gpx',
					'pdf' => 'Thoughts.pdf',
				),
				'Waste of time' => array(
					'gpx' => 'Waste%20of%20time.gpx',
					'pdf' => 'Waste%20of%20time.pdf',
				),				
			),
		);
	}
	
	public function indexAction() {
		if (Zend_Controller_Action_HelperBroker::getStaticHelper('layout')->getLayout() == 'degraded') {
			$this->_forward('lyrics');
		}
	}
	
	public function tabAction() {
		if (Zend_Controller_Action_HelperBroker::getStaticHelper('layout')->getLayout() !== 'degraded') {
			$this->_forward('index');
		}
	}
	
	public function lyricsAction() {
		if (Zend_Controller_Action_HelperBroker::getStaticHelper('layout')->getLayout() !== 'degraded') {
			$this->_forward('index');
		}
	}
}
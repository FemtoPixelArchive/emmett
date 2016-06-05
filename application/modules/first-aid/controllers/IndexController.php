<?php
/**
 * Index Controller that render the init JSON
 * 
 * @author Jeremy MOULIN
 *
 * @uses Zend_Controller_Action
 *
 */
class FirstAid_IndexController extends Zend_Controller_Action {
	/**
	 * Home page
	 */
	public function indexAction() {
		$this->_forward('album');
	}
	
	public function albumAction() {
		$albums = Emmett_Model_Albums::get();
		$this->view->album = $albums['First Aid'];
		$this->view->headTitle('First Aid');
	}
	
	public function bandAction() {
		$member = $this->_getParam('member', 'emmett');
		$this->view->members = array(
			'emmett' => tr('Band'),
			'cedric' => 'Cédric CIZAIRE',
			'jay' => 'Jay MOULIN',
			'maxime' => 'Maxime GUÉNY',
			'romeo' => 'Roméo VALALIK BESSERVE',
		);
		if (!isset($this->view->members[$member])) {
			$member = 'emmett';
		}
		$this->view->headTitle($this->view->members[$member]);
		$this->view->headMeta(strip_tags(file_get_contents(ROOT_DIR . '/application/modules/first-aid/views/scripts/band/' . $member . '.phtml')), 'description');
		foreach ($this->view->members as $memberKey => $title) {
			if ($member != $memberKey) {
				array_shift($this->view->members);
				$this->view->members[$memberKey] = $title;
			} else {
				break;
			}
		}
	}
			
	public function adviceAction () {
		$this->_helper->layout()->disableLayout();
		$userAgent = new Zend_Http_UserAgent;
		$this->view->device = $userAgent->getDevice();
		$decision = $this->_getParam('decision');
		$this->view->redirect = false;
		if ($decision != NULL) {
			setcookie('firstaidexperiment', ($decision == 'yes' ? '1' : '0'), time() + (60 * 60 * 24 * 7), '/');
			$this->view->redirect = true;
		}
	}
	
	protected function _getFeed() {
		$cacheSys = $this->getInvokeArg('bootstrap')->config['cache']['active'] ? $this->_helper->cache->getCache('apc') : NULL;
		$cacheKey = 'news';
		$feed = array();
		if ($cacheSys) {
			$feed = $cacheSys->load($cacheKey);
		}
		if (!$feed) {
			/** FACEBOOK **/
			$token = file_get_contents('https://graph.facebook.com/oauth/access_token?client_id=217693361622853&client_secret=d23b1670ccf588f3b086f93e126a3b61&grant_type=client_credentials');
			$FBfeed = Zend_Json::decode(file_get_contents('https://graph.facebook.com/emmettfanpage/feed?' . $token));
			foreach ($FBfeed['data'] as $item) {
				if ($item['from']['id'] == "189590894403465") {
					list($null, $postId) = explode('_', $item['id']);
					$feed[strtotime(str_replace('+0000', '', str_replace('T', ' ', $item['created_time'])))] = array(
						'social' => 'facebook',
						'message' => isset($item['message']) ? $item['message'] : NULL,
						'type' => $item['type'],
						'picture' => isset($item['picture']) ? $item['picture'] : NULL,
						'link' => isset($item['link']) ? $item['link'] : NULL,
						'href' => 'http://www.facebook.com/EmmettFanPage/posts/' . $postId,
					);
				}
			}
			/** TWITTER **/
			$TWfeed = Zend_Json::decode(file_get_contents('http://api.twitter.com/1/statuses/user_timeline.json?screen_name=EmmettBand'));
			foreach($TWfeed as $item) {
				$feed[strtotime(str_replace('+0000', '', $item['created_at']))] = array(
					'social' => 'twitter',
					'message' => $item['text'],
					'link' => 'http://twitter.com/#!/EmmettBand/status/' . $item['id_str'],
				);
			}
			/** YOUTUBE **
			$yt = new Zend_Gdata_YouTube;
			foreach ($yt->getUserUploads('emmettpopmusic') as $item) {
				Zend_Debug::dump($item->getVideoTitle());
				Zend_Debug::dump($item->getVideoDescription());
				Zend_Debug::dump($item->getVideoWatchPageUrl());
				Zend_Debug::dump($item->getFlashPlayerUrl());
				Zend_Debug::dump($item->getVideoState());
				die;
			}
			
			/** SOUNDCLOUD **
			$SCfeed = Zend_Json::decode(file_get_contents('https://api.soundcloud.com/users/emmettband/tracks.json'));
			foreach($SCfeed as $item) {
				$feed[strtotime($item['created_at'])] = array(
					'social' => 'soundcloud',
					'link' => $item['permalink_url'],
					'message' => $item['title'],
					'id' => $item['id'],
				);
			}
			/**/
			
			
			krsort($feed);
			if ($cacheSys && $feed) {
				$cacheSys->save($feed, $cacheKey);
			}
		}
		return $feed;
	}
	
	/*public function newsAction() {
		$feed = $this->_getFeed();
		$this->view->feed = $feed;
	}*/
	
	public function downloadAlbumAction() {
		ini_set('max_execution_time', 0);
		$filename = dirname(__FILE__) . '/stats.txt';
		$file = fopen($filename, 'rb');
		$counter = fgets($file) + 1;
		fclose($filename);
		$file = fopen($filename, 'w');
		fputs($file, $counter);
		fclose($file);
		
		$filename = ROOT_DIR . '/files/First Aid.zip';
		$this->_helper->viewRenderer->setNoRender(true);
		$this->_helper->layout()->disableLayout(true);
		$this->getResponse()
			->setHeader('Content-Disposition', 'attachment;filename="EMMETT - First Aid (+Bonus).zip";')
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
	
	public function downloadAction() {
		$albums = Emmett_Model_Albums::get();
		$this->view->album = $albums['First Aid'];
		$this->view->headTitle('First Aid');
	}
	/*
	public function rssAction() {
		$this->_helper->viewRenderer->setNoRender(true);
		$this->_helper->layout()->disableLayout(true);
		$feedArray = array(
			'title' => tr('EMMETT Latest News'),
			'link' => 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER["REQUEST_URI"],
			'charset' => 'utf-8',
			'description' => tr('EMMETT Latest News'),
			'author' => 'EMMETT',
			'copyright' => 'EMMETT',
			'generator' => 'EMMETT',
			'language' => 'fr',
			'ttl' => '120',
			'entries' => array(
			),
		);
		foreach ($this->_getFeed() as $key => $document) {
			$item = array(
				'title' => $document['message'] ? $document['message'] : $document['picture'],
				'pubDate' => date('r', strtotime($key)),
				'link' => $document['link'] ? $document['link'] : 'http://www.emmett.eu',
				'description' => $document['message'] ? $document['message'] : $document['picture'],
				'content' => $document['message'] ? $document['message'] : '<img src="' . $document['picture'] . '" />',
			);
			$feedArray['entries'][] = $item;
		}
		//var_dump($feedArray);die;
		$feed = Zend_Feed::importArray($feedArray, $this->_getParam('format', 'rss') == 'rss'? 'rss' : 'atom');
        $feed->send();
	}*/
}
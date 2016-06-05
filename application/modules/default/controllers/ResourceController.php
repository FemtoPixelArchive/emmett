<?php
/**
 * Controller that concat all CSS / JS files into www/lib/ for optimisation intend
 * 
 * @uses Zend_Controller_Action
 *  
 * @author Jeremy MOULIN
 *
 */
class ResourceController extends Zend_Controller_Action {
	/**
	 * (non-PHPdoc)
	 * @see library/Zend/Controller/Zend_Controller_Action#init()
	 */
	public function init() {
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
	}
	
	/**
	 * Get the file through router to compile it
	 * 
	 * @throws Exception if extension is not permitted
	 * @throws Exception if module is not permitted
	 * 
	 * @uses External_Minify_JSMin
	 * @uses External_Minify_CSSMin
	 * 
	 */
	public function indexAction() {
		$module = $this->_getParam('modulable');
		$file = $this->_getParam('file');
		$fragments = explode('.', $file);
		$extension = mb_strtolower($fragments[count($fragments) - 1]);
			
		$allowedExtensions = array(
			'js' => 'application/x-javascript; charset=\'UTF-8\'',
			'css' => 'text/css',
		);

		$cacheKey = str_replace('-', '', str_replace('.', '', 'resource' . $module . $file));
		$cacheSys = $this->getInvokeArg('bootstrap')->config['cache']['active'] ? $this->_helper->cache->getCache('file') : NULL;
		$content = NULL;
		if ($cacheSys) {
			$content = $cacheSys->load($cacheKey);
		}
		if (!$content) {
			if (!isset($allowedExtensions[$extension])) {
				throw new Exception('File is not permitted');
			}
			
			$allowedModules = array('default', 'back', 'first-aid', 'fighting-fate-ep', 'new-logo');
			if (!in_array($module, $allowedModules)) {
				throw new Exception('Module is not permitted');
			}
			
			ob_start();
			foreach (glob(ROOT_DIR . '/www/lib/' . $module . '/' . $extension . '/*.' . $extension) as $file) {
				readfile($file);
				echo "\n\n";
			}
			$content = ob_get_clean();
			$class = 'External_Minify_' . strtoupper($extension) . 'Min';
			if (class_exists($class)) {
				if ($this->getInvokeArg('bootstrap')->config['minify']['active']) {
					$content = call_user_func($class . '::minify', $content);
				}
			}
			if ($cacheSys) {
				$cacheSys->save($content, $cacheKey);
			}
		}
		if (Zend_Controller_Front::getInstance()->getPlugin('Marcel_Plugin_Staticfier')) {
			Zend_Controller_Front::getInstance()->getPlugin('Marcel_Plugin_Staticfier')->disablePlugin();
		}
		$this->getResponse()
				->setHeader("Content-type", $allowedExtensions[$extension], true)
				->setBody($content);
	}
	
	/**
	 * Function to resize images
	 *
	 * @param string $file Path to the file to resize
	 * @param string $type Type to get from configuration
	 */
	protected function _resizer($file, $type) {
		$typeList = $this->getInvokeArg('bootstrap')->config['imageresizer']['formats'];
		if (isset($typeList['original'])) {
			unset($typeList['original']);
		}
		
		if (!array_key_exists($type, $typeList)) {
			$type = 'original';
		}
		try {
			$thumb = External_PhpThumb_PhpThumbFactory::create($file);
		} catch (Exception $e) {
			$file = $typeList[$type]['default'];
			$thumb = External_PhpThumb_PhpThumbFactory::create($file);
		}
		if ($type != 'original') {
			$dimensions = $thumb->getCurrentDimensions();
			$ratioOriginal = $dimensions['width'] / $dimensions['height']; 
			$ratioDest = $typeList[$type]['width'] / $typeList[$type]['height'];
			if ($typeList[$type]['full'] != 'width' && $typeList[$type]['full'] != 'height') {
				if ($ratioDest < $ratioOriginal) {
					$height = $typeList[$type]['height'];
					$width = $typeList[$type]['height'] * $ratioOriginal;
					if ($width > $typeList[$type]['width'] && !$typeList[$type]['cropped']){
						$width = $typeList[$type]['width'];
						$height = $typeList[$type]['width'] * (1 / $ratioOriginal);
					}
				} elseif ($ratioDest >= $ratioOriginal) {
					$width = $typeList[$type]['width'];
					$height = $typeList[$type]['width'] * (1 / $ratioOriginal);
					if ($height > $typeList[$type]['height'] && !$typeList[$type]['cropped']){
						$height = $typeList[$type]['height'];
						$width = $typeList[$type]['height'] * $ratioOriginal;
					}
				}
			}
			if ($typeList[$type]['full'] == 'auto') {
				$typeList[$type]['full'] = ($dimensions['width'] >= $dimensions['height']) ? 'height' : 'width';
				if ($typeList[$type]['cropped']) {
					$typeList[$type]['full'] = ($dimensions['height'] <= $dimensions['width']) ? 'height' : 'width';
					if ($typeList[$type]['full'] == 'width') {
						if (($typeList[$type]['width'] * (1 / $ratioOriginal)) < $typeList[$type]['height']) {
							$typeList[$type]['full'] = 'height';
						}
					} else if ($typeList[$type]['full'] == 'height') {
						if (($typeList[$type]['height'] * $ratioOriginal) < $typeList[$type]['width']) {
							$typeList[$type]['full'] = 'width';
						}
					}
				}
			}
			if ($typeList[$type]['full'] == 'width') {
				$width = $typeList[$type]['width'];
				$height = $typeList[$type]['width'] * (1 / $ratioOriginal);
				$thumb->setOptions(array(
					'resizeUp' => true,
				));
			} else if ($typeList[$type]['full'] == 'height') {
				$height = $typeList[$type]['height'];
				$width = $typeList[$type]['height'] * $ratioOriginal;
				$thumb->setOptions(array(
					'resizeUp' => true,
				));
			}
			
			$thumb->resize($width, $height);
			if ($typeList[$type]['cropped']) {
				$thumb->cropFromCenter($typeList[$type]['width'], $typeList[$type]['height']);
			}
		}
		$thumb->show();
	}
}

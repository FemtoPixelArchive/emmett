<?php

class Emmett_View_Helper_RenderFacebook extends Zend_View_Helper_Abstract {
	public function renderFacebook($element, $time) {
		$string = '<div class="facebook">';
		switch($element['type']) {
			case 'status':
				$string .= "<div class='text'>".$this->view->clickableUrl($element['message'])."</div><div class='date'>".sprintf(tr('Published on %s'), date(tr('Y-m-d H:i:s'), $time))."</div><div class='link'><a href='{$element['href']}' target='_blank' data-tag='news_facebook'>Facebook</a></div>";
			break;
			case 'link':
				$string .= "<div class='text'>".$this->view->clickableUrl($element['message'])."</div><div class='date'>".sprintf(tr('Published on %s'), date(tr('Y-m-d H:i:s'), $time))."</div><div class='link'><a href='{$element['href']}' target='_blank' data-tag='news_facebook'>Facebook</a></div>";
			break;
			case 'video':
				preg_match('~&url=([^&]+)~', $element['picture'], $globb);
				$url = urldecode($globb[1]);
				$string .= "<div class='text'>".$this->view->clickableUrl($element['message'])."</div><div class='picture'><a href='{$element['link']}'><img src='{$url}'/></a></div><div class='date'>".sprintf(tr('Published on %s'), date(tr('Y-m-d H:i:s'), $time))."</div><div class='link'><a href='{$element['href']}' target='_blank' data-tag='news_facebook'>Facebook</a></div>";
				break;
			case 'photo':
				$string .= "<div class='text'>".$this->view->clickableUrl($element['message'])."</div><div class='picture'><a href='{$element['link']}'><img src='{$element['picture']}'/></a></div><div class='date'>".sprintf(tr('Published on %s'), date(tr('Y-m-d H:i:s'), $time))."</div><div class='link'><a href='{$element['href']}' target='_blank' data-tag='news_facebook'>Facebook</a></div>";
				break;
			default:
				//var_dump($element);
			break;
		}
		return $string . "</div>";
	}
}
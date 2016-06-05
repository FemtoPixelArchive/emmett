<?php

class Emmett_View_Helper_RenderTwitter extends Zend_View_Helper_Abstract {
	public function renderTwitter($element, $time) {
		$string = '<div class="twitter">';
		$string .= "<div class='text'>".$this->view->clickableUrl($element['message'])."</div><div class='date'>".sprintf(tr('Published on %s'), date(tr('Y-m-d H:i:s'), $time))."</div><div class='link'><a href='{$element['link']}' target='_blank' data-tag='news_twitter'>@EmmettBand</a></div>";
		return $string . "</div>";
	}
}
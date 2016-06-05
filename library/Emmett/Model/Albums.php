<?php
class Emmett_Model_Albums {
	static public function get($key = NULL) {
		$albums = array(
			'First Aid' => array(
				'cover' => 'img/first-aid/cover.jpg',
				'back' => 'img/first-aid/back.jpg',
				'disk' => 'img/first-aid/disk.png',
				'tracks' => array(
					'Press Play' => array(
						'ogg' => 'audio/first-aid/01.ogg',
						'style' => 'width:188px;height:28px;display:block;',
					),
					'Surrogates' => array(
						'ogg' => 'audio/first-aid/02.ogg',
						'style' => 'display: block;height: 36px;margin-left: 200px;margin-top: -23px;width: 187px;',
					),
					'First Aid' => array(
						'ogg' => 'audio/first-aid/03.ogg',
						'style' => 'width:188px;height:39px;display:block;',
					),
					'The Savior' => array(
						'ogg' => 'audio/first-aid/04.ogg',
						'style' => 'display: block;height: 36px;margin-left: 200px;margin-top: -23px;width: 187px;',
					),
					'Crossing The Line' => array(
						'ogg' => 'audio/first-aid/05.ogg',
						'style' => 'height: 30px;width: 280px;display:block;',
					),
					'Human Nature' => array(
						'ogg' => 'audio/first-aid/06.ogg',
						'style' => 'height: 33px;width: 209px;margin-left: 179px;display:block;',
					),
					'Thoughts' => array(
						'ogg' => 'audio/first-aid/07.ogg',
						'style' => 'height: 27px;width: 188px;display:block;',
					),
					'Mr Useless' => array(
						'ogg' => 'audio/first-aid/08.ogg',
						'style' => 'height: 28px;width: 200px;margin-left: 200px;display:block;',
					),
					'Friendshit' => array(
						'ogg' => 'audio/first-aid/09.ogg',
						'style' => 'height: 33px;width: 184px;display:block;',
					),
					'How Much?' => array(
						'ogg' => 'audio/first-aid/10.ogg',
						'style' => 'height: 28px;width: 180px;margin-left: 215px;display:block;',
					),
					'Waste of Time' => array(
						'ogg' => 'audio/first-aid/11.ogg',
						'style' => 'display: block;height: 29px;width: 232px;',
					),
					'Fox Bells' => array(
						'ogg' => 'audio/first-aid/12.ogg',
						'style' => 'display: block; height: 29px;width: 172px;margin-left: 218px;',
					),
					'Leaving' => array(
						'ogg' => 'audio/first-aid/13.ogg',
						'style' => 'height: 35px;width: 314px;display:block;',
					),
				),
			),
		);
		return ($key && isset($albums[$key]) ? $albums[$key] : $albums);
	}
}
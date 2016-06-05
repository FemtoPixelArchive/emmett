<?php
ini_set('display_errors', '0');
define('APP_ID', '214563221943500');
define('APP_SECRET', '9313af9f1c99858d29af6cfbc5e1ddd6');

$pdo = new PDO(
	'mysql:host=localhost;dbname=emmett',
	'emmett',
	'EsyftG2AsQBZ83bW'
);
$pdo->exec("SET NAMES utf8");


$admins = array(
	'1784486451',
);

function parse_signed_request($signed_request, $secret = APP_SECRET) {
	list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

	// decode the data
	$sig = base64_url_decode($encoded_sig);
	$data = json_decode(base64_url_decode($payload), true);

	if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
		error_log('Unknown algorithm. Expected HMAC-SHA256');
		return null;
	}

	// check sig
	$expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
	if ($sig !== $expected_sig) {
		error_log('Bad Signed JSON signature!');
		return null;
	}

	return $data;
}

function base64_url_decode($input) {
	return base64_decode(strtr($input, '-_', '+/'));
}

if (!isset($_REQUEST['signed_request'])) {
	$signed = $_SESSION['signed_request'];
} else {
	unset($_SESSION['signed_request']);
	$signed = $_REQUEST['signed_request'];
	$_SESSION['signed_request'] = $signed;
}

//$host = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . '/fbyt-bridal';

$facebookInfos = parse_signed_request($signed);

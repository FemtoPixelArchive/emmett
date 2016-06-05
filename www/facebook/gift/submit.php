<?php
require_once('head.php');
if (!isset($facebookInfos['page']['liked']) || !$facebookInfos['page']['liked']) :
?>
<img src='forcelike.jpg' />
<?php else : 
$code = isset($_POST['code']) ? $_POST['code'] : '';
$statement = $pdo->prepare("SELECT * FROM gift WHERE code = ?");
$statement->execute(array($code));
$realcode = $statement->fetch();
if ($realcode && strtolower($realcode['code']) == strtolower($code)) {
	$pdo->prepare("UPDATE gift SET number = number + 1 WHERE code = ?")->execute(array($code));
	$file = "Promises.mp3"; 
	header("Pragma: public"); 
	header('Content-disposition: attachment; filename='.$file); 
	header("Content-type: ".mime_content_type(dirname(__FILE__) . '/' . $file)); 
	header('Content-Transfer-Encoding: binary'); 
	ob_clean(); 
	flush(); 
	readfile(dirname(__FILE__) . '/' . $file); 
} else {
?>
<link rel="stylesheet" type="text/css" href="css.css" />
<div id='body'>
<h3>Eh non, tu n'es pas venu à notre concert ou tu as mal écouté, tu peux donc aller te faire "foudre" !</h3>
</div>
<?php } 
endif;

<?php
require_once('head.php');
if (!isset($facebookInfos['page']['liked']) || !$facebookInfos['page']['liked']) :
?>
<img src='forcelike.jpg' />
<?php else : 
$message = isset($_POST['message']) ? addslashes($_POST['message']) : '';
$mail = isset($_POST['mail']) ? addslashes($_POST['mail']) : '';
$firstname = isset($_POST['firstname']) ? addslashes($_POST['firstname']) : '';
$lastname = isset($_POST['lastname']) ? addslashes($_POST['lastname']) : '';
$pdo->query("INSERT INTO concours SET message = '$message', mail = '$mail', firstname = '$firstname', lastname = '$lastname'");
?>
<link rel="stylesheet" type="text/css" href="css.css" />
<div id='body'>
<h3>La participation est enregistrée !</h3>
</div>
<?php endif ?>

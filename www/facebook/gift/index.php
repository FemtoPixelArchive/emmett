<?php
require_once('head.php');
if (!isset($facebookInfos['page']['liked']) || !$facebookInfos['page']['liked']) :
?>
<img src='forcelike.jpg' />
<?php else : ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css.css" />
<div id='body'>
<p>Vous faîtes partie des 3407 personnes présentes à notre concert du 7 septembre? Alors vous disposez du code secret le plus important depuis celui de Da Vinci.</p>
<p class="question">C'est le moment de l'insérer juste ici et vous obtiendrez le Graal, notre toute dernière chanson inédite!</p>
<form method='post' action='submit.php'>
<label for='code'>Code :</label><input type='text' name='code'/>
<input type='submit' value='Envoyer' />
<input type='hidden' name='signed_request' value='<?php echo $_REQUEST['signed_request'] ?>' />
</form>
</div>
<script src="http<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : ''?>://connect.facebook.net/fr_FR/all.js"></script>
<script type='text/javascript'>
	if(document.location.protocol == 'https:' && !!FB && !!FB._domain && !!FB._domain.staticfb) {
		FB._domain.staticfb = FB._domain.staticfb.replace('http://static.ak.facebook.com/', 'https://s-static.ak.fbcdn.net/');
	}

	FB.Canvas.setAutoGrow();
</script>				
<?php endif ?>

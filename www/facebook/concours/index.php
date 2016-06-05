<?php
require_once('head.php');
if (!isset($facebookInfos['page']['liked']) || !$facebookInfos['page']['liked']) :
?>
<img src='forcelike.jpg' />
<?php else : ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css.css" />
<div id='body'>
<p>Gagnez 2 places pour le concert d'EMMETT à la Cigale!</p>
<p>Larusso fait son come back avec un featuring du leader de Cypress Hill! On attendait le duo entre Thom Yorke et Loana mais là, c'est un peu compromis...</p>
<p class="question">Alors avec qui EMMETT pourrait-il faire un featuring aussi improbable?</p>
<p>À vous de proposer les idées des plus ridicules aux plus sérieuses. Vous avez aussi droit aux morts!</p>
<p>La réponse la plus originale vous permettra de gagner 2 places pour ce concert historique qui aura lieu le 22 janvier à l'heure du goûter!
Comme disait Jean-Claude Dusse: "Et puis bonne chance surtout!"</p>
<form method='post' action='submit.php'>
<label for='mail'>Mail :</label><input type='text' name='mail'/>
<label for='firstname'>Prénom :</label><input type='text' name='firstname'/>
<label for='lastname'>Nom :</label><input type='text' name='lastname'/>
<label for='message'>Réponse :</label>
<textarea name='message' rows='5'></textarea>
<input type='submit' value='Répondre' />
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

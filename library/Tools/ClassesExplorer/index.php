<?php 
/* PACKAGE SELECTOR */

/* If classes 'DB' doesn't exist, call run.php */
if (!file_exists(dirname(__FILE__) . '/inc_classes.php')) {
	include_once(dirname(__FILE__) . '/run.php');
}

include_once(dirname(__FILE__) . '/inc_classes.php');

/* Include conf file which contains the list of packages */
include_once(dirname(__FILE__) . '/conf.php');

/* Retrieve each dependencies from class 'DB' for a selected class */
function getDependencies($className, &$result) {
	global $data;
	
	if (!array_key_exists($className, $data)) { return; }
	if (!array_key_exists('dependencies', $data[$className])) { return; }
	
	$result[] = $className;
	foreach ($data[$className]['dependencies'] as $d) {
		if (in_array($d, $result)) { continue; }
		getDependencies($d, $result);
	}
	
	return;
}

if (array_key_exists('selection', $_POST)) {

	$final = array();
	/* Retrieve all classes and theirs dependencies for selected packages */
	foreach ($_POST['selection'] as $p) {
	
		if (!array_key_exists($p, $packages)) { continue; }
		
		foreach ($packages[$p]['classes'] as $class) {
			if (in_array($class, $final)) { continue; }
			
			getDependencies($class, $final);
		}
	}
	
	$final = array_unique($final);
}

?><!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<style type="text/css">
			body { font-family:Arial, sans serif; width:100%; background-color:#bbb; margin:0;}
			#title { text-align:center; display:none;}
			#content { width:420px; margin: 0 auto; background-color:#fff;padding:10px;}
			fieldset { border:none; }
			label { display: block; }
			.button { border: 1px solid #bbb; width:80px; margin: 0 auto; display:inline-block; padding:5px;}
		</style>
		<script type="text/javascript" src="http://konami-js.googlecode.com/svn/trunk/konami.js"></script>
		<script type="text/javascript">
			konami = new Konami()
			konami.code = function() {
					document.getElementById('title').style.display='block';
				}
			konami.load()
			
		</script>
	</head>
	<body>
		<div id="title"><pre>
          _____                    _____                    _____                    _____                    _____                    _____  
         /\    \                  /\    \                  /\    \                  /\    \                  /\    \                  /\    \ 
        /::\____\                /::\    \                /::\    \                /::\    \                /::\    \                /::\____\
       /::::|   |               /::::\    \              /::::\    \              /::::\    \              /::::\    \              /:::/    /
      /:::::|   |              /::::::\    \            /::::::\    \            /::::::\    \            /::::::\    \            /:::/    / 
     /::::::|   |             /:::/\:::\    \          /:::/\:::\    \          /:::/\:::\    \          /:::/\:::\    \          /:::/    /  
    /:::/|::|   |            /:::/__\:::\    \        /:::/__\:::\    \        /:::/  \:::\    \        /:::/__\:::\    \        /:::/    /   
   /:::/ |::|   |           /::::\   \:::\    \      /::::\   \:::\    \      /:::/    \:::\    \      /::::\   \:::\    \      /:::/    /    
  /:::/  |::|___|______    /::::::\   \:::\    \    /::::::\   \:::\    \    /:::/    / \:::\    \    /::::::\   \:::\    \    /:::/    /     
 /:::/   |::::::::\    \  /:::/\:::\   \:::\    \  /:::/\:::\   \:::\____\  /:::/    /   \:::\    \  /:::/\:::\   \:::\    \  /:::/    /      
/:::/    |:::::::::\____\/:::/  \:::\   \:::\____\/:::/  \:::\   \:::|    |/:::/____/     \:::\____\/:::/__\:::\   \:::\____\/:::/____/       
\::/    / ~~~~~/:::/    /\::/    \:::\  /:::/    /\::/   |::::\  /:::|____|\:::\    \      \::/    /\:::\   \:::\   \::/    /\:::\    \       
 \/____/      /:::/    /  \/____/ \:::\/:::/    /  \/____|:::::\/:::/    /  \:::\    \      \/____/  \:::\   \:::\   \/____/  \:::\    \      
             /:::/    /            \::::::/    /         |:::::::::/    /    \:::\    \               \:::\   \:::\    \       \:::\    \     
            /:::/    /              \::::/    /          |::|\::::/    /      \:::\    \               \:::\   \:::\____\       \:::\    \    
           /:::/    /               /:::/    /           |::| \::/____/        \:::\    \               \:::\   \::/    /        \:::\    \   
          /:::/    /               /:::/    /            |::|  ~|               \:::\    \               \:::\   \/____/          \:::\    \  
         /:::/    /               /:::/    /             |::|   |                \:::\    \               \:::\    \               \:::\    \ 
        /:::/    /               /:::/    /              \::|   |                 \:::\____\               \:::\____\               \:::\____\
        \::/    /                \::/    /                \:|   |                  \::/    /                \::/    /                \::/    /
         \/____/                  \/____/                  \|___|                   \/____/                  \/____/                  \/____/ 
                                                                                                                                              
		</pre></div>
		<div id="content">
		<?php if (!isset($final)) { ?>
			<!-- First Step : Select your packages -->
			<h2>Choisissez vos packages :</h2>
			<form method="post" action=".">
				<fieldset>
				<?php foreach ($packages as $id => $pack) { ?>
					<label for="<?php echo $id; ?>">
						<input type="checkbox" name="selection[]" id="<?php echo $id; ?>" value="<?php echo $id; ?>" />
						<?php echo $pack['label']; ?>
					</label>
				<?php } ?>
				</fieldset>
				<input type="submit" value="Valider" id="submit"  class="button"/>
			</form>
		<?php  } else { ?>
			<!-- Second Step : Confirm selected packages and download Zip File -->
			<h2>Packages sélectionnés</h2>
			<ul>
			<?php foreach ($_POST['selection'] as $p) {
					if (!isset($packages[$p]['label'])) continue; ?>
					<li><?php echo $packages[$p]['label']; ?></li>
			<?php } ?>
			</ul>
			<?php $count = count($final); 
			if ($count) { ?>
			<div>
				Soit <?php echo ($count . ' classe' . ($count > 1 ? 's' : '')); ?> à exporter.
			</div>
			<div>
				<input type="button" id="next" value="Poursuivre"  class="button" onclick="window.open('<?php echo './get_files.php?list=' . rawurlencode(serialize($final)); ?>');"/>
			<?php } else { ?>
			<div>
				Aucune classe à exporter.
			</div>
			<div>
			<?php } ?>
				<input type="button" id="cancel" value="Annuler" class="button" onclick="window.location='.'"/>
			</div>
		<?php } ?>
		</div>
	</body>
</html>
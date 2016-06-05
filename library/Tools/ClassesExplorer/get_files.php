<?php

include("conf.php");

/* Unserialize selected classes */
$list = unserialize(rawurldecode($_GET['list']));

$zip = new ZipArchive();
$filename = "./packages.zip";

/* Create or Overwrite the Zip File */
if (!$zip->open($filename, ZIPARCHIVE::OVERWRITE)) {
	exit("cannot open or create <$filename>\n");
}

$errors = array();

/* Find and add files for each class into Zip */
foreach ($list as $class) {
	$file = implode('/', explode('_', $class)) . '.php';
	if (!file_exists(ROOT_DIR . '/' . $file)) { $errors[] = ("File <$file> doesn't exists"); continue; }
	
	if (!$zip->addFile(ROOT_DIR . '/' . $file, $file)) {
		$errors[] = ("Unable to add <$file> in ZIP");
	}
}

$zip->close();

/* Return Zip content to download */
header("Content-type: application/zip");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Expires: 0");
readfile("$filename");
exit;

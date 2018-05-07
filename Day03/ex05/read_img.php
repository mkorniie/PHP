<?PHP
	$file = '../img/42.png';
	$type = 'image/jpeg';
	header('Content-Type:'.$type);
	readfile($file);
?>
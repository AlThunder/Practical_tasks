<?php
	$data = getimagesize('a.jpg');
	//print_r($data);
	$im = imagecreatefromjpeg('a.jpg');
	//header('Content-Type: image/jpeg');
	//imageJpeg($im);
	
	echo imageSX($im).'<br/>';
	echo imageSY($im).'<br/>';
	imageJpeg($im, 'b.jpg');



	imageDestroy($im);
?>
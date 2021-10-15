<?php
	$a = IntlChar::chr(mt_rand(32, 125));
	$b = IntlChar::chr(mt_rand(32, 125));
	$c = IntlChar::chr(mt_rand(32, 125));
	$d = IntlChar::chr(mt_rand(32, 125));
	$string = $a.$b.$c.$d;
	
	$im = imagecreatetruecolor(500, 500);
	$random_0 = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	imagefilledrectangle($im, 0, 0, 500, 500, $random_0);
	$font = 'W:\domains\mysite.local\fonts\arial.ttf';
	$random = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	$random_1 = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	$random_2 = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	$random_3 = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));

	imagettftext($im, 60, 0, 200, 250, $random, $font, $a);
	imagettftext($im, 60, 0, 230, 250, $random, $font, $b);
	imagettftext($im, 60, 0, 260, 250, $random, $font, $c);
	imagettftext($im, 60, 0, 290, 250, $random, $font, $d);


	$blue = imagecolorallocate($im, 0, 0, 255);
	$red = imagecolorallocate($im, 255, 0, 0);
	$green = imagecolorallocate($im, 0, 255, 0);
	imagefilledellipse($im, mt_rand(100, 400), mt_rand(100, 400), 10, 10, $blue);
	for ($i = 0; $i < 100; $i++) {
		imagefilledellipse($im, mt_rand(100, 400), mt_rand(100, 400), 10, 10, $random_1);
	}
	for ($i = 0; $i < 100; $i++) {
		imagefilledellipse($im, mt_rand(100, 400), mt_rand(100, 400), 10, 10, $random_2);
	}
	for ($i = 0; $i < 100; $i++) {
		imagefilledellipse($im, mt_rand(100, 400), mt_rand(100, 400), 10, 10, $random_3);
	}

	header('Content-Type: image/png');
	imagepng($im);
	imagedestroy($im);
	
?>
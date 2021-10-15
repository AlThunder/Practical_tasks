<?php
	echo M_PI.'<br/>';
	echo M_E.'<br/>';

	$x = -3;
	echo abs($x).'<br/>';

	$x = 12.39354654654;
	echo round($x).'<br/>';
	echo round($x, -1).'<br/>';


	echo floor($x).'<br/>';
	echo ceil($x).'<br/>';
	
	echo mt_rand(1, 5).'<br/>';
	$arr = [];
	for ($i = 0; $i < 10; $i++) 
		$arr[] = mt_rand(1, 100);
	print_r($arr);
	echo '<br/>';


	echo min(5, 7, -3, 0, 10, 12, 3);
	echo '<br/>';
	echo max(5, 7, -3, 0, 10, 12, 3);
	echo '<br/>';

	echo base_convert('100', 10, 2);
	echo '<br/>';

	echo sin($x);
	echo '<br/>';
	echo cos($x);
	echo '<br/>';
	echo tan($x);
	echo '<br/>';
	echo (1/tan($x));
	echo '<br/>';

	$x = 0.5;
	echo asin($x);
	echo '<br/>';
	echo acos($x);
	echo '<br/>';
	echo atan($x);
	echo '<br/>';
	echo (M_PI/2 - atan($x));
	echo '<br/>';

	echo rad2deg(asin($x)).'<br/>';
	echo deg2rad(30).'<br/>';

?>



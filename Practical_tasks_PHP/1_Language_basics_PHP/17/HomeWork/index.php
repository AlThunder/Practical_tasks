<?php
	$x = 5;
	$y = 8;
	function suM() {
		$sum = $GLOBALS['x'] + $GLOBALS['y'];
		echo 'Сумма чисел '.$GLOBALS['x'].' и '.$GLOBALS['y']." равна $sum";
	}
	suM();
?>
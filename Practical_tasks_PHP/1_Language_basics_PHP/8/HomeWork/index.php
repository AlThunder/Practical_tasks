<?php
	$x = 15;
	$y = 142;
	$r = $x < $y;
	echo $r.'<br/>';
	$r = $x > $y;
	echo $r.'<br/>';
	$r = $x == $y;
	echo $r.'<br/>';
	$r = $x === $y;
	echo $r.'<br/>';
	echo ((!(2>1) && (3>1) || ($x == $x)) xor 0);
?>

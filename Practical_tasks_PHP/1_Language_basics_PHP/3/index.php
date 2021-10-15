<?php
	$A = 5;
	$b = 7;
	echo isset($a);
	echo "<br/>";
	echo isset ($b);

	$x = 15;
	echo '<br/>';
	echo gettype ($x);
	$x = (double) $x;
	echo '<br/>';
	echo gettype ($x);
	echo '<br/>';

	$str = 'Hello';
	echo 'Переменная str - это string? :';
	echo is_string($str);
	echo '<br/>';

	echo ((int)  $str);
	echo '<br/>';
	$str_number = '12345';
	echo ((int) $str_number);
	echo '<br/>';
	echo gettype($str_number);
	echo '<br/>';
	echo is_numeric($str_number);

	echo '<br/>';
	echo isset($x);
	echo '<br/>';
	unset($x);
	echo isset($x);
?>
<?php
	$x = "Hello";
	if (gettype($x) == "string") echo 'x - это строка';
	elseif (gettype($x) == "integer") echo 'x - это целое число';
	elseif (getttype($x) == "boolean") echo 'x - это boolean';
	else echo 'x - это неизвестный тип';
	echo '<br/>';

	switch (gettype($x)) {	case "string":
			echo 'x - это строка';
			break;
		case "integer":
			echo 'x - этоэто целое число';
			break;
		case "boolean":
			echo 'x - это boolean';
			break;
		default : 
			echo 'x - это неизвестный тип';
	}
	

	$a = 1;
	$b = 2;
	switch ($a <=> $b) {
		case 0:
			echo "$b == $a";
			break;
		case 1:
			echo "$b < $a";
			break;
		case -1:
			echo "$b > $a";
			break;
	}

	echo '<br/>';

	switch (gettype($x)) :	
		case "string":
			echo 'x - это строка';
			break;
		case "integer":
			echo 'x - этоэто целое число';
			break;
		case "boolean":
			echo 'x - это boolean';
			break;
		default : 
			echo 'x - это неизвестный тип';
	endswitch;
?>
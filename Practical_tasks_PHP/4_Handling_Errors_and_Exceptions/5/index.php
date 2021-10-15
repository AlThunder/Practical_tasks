<?php
	try {
		//$x = 5 % 0;
		//intdiv(5, 0);
		//$str = 'Hello';
		//$str[] = 2;
		//intdiv(PHP_INT_MIN, -1);
		eval("5 + '");
	} catch (Error $e) {
		echo $e;
	}
?>
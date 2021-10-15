<?php
	$counter = 0;
	if (isset($_COOKIE['counter'])) {
		$counter = $_COOKIE['counter'];
		$counter++;
	}
	setcookie('counter', $counter, time() + 3600);
	echo $counter;
?>
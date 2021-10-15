<?php
	session_start();
	$counter = 0;
	$counter = $_SESSION['counter']?? 0;
	$counter++;
	$_SESSION['counter'] = $counter;
	print_r($_COOKIE);
	//unset($_SESSION['counter']);
	echo $counter;
?>
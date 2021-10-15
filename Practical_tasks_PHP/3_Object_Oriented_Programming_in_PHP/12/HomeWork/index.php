<?php
	
	use local\mysite\Car;
	use local\mysite_1\Aircraft;
	require_once 'a.php';
	require_once 'b.php';

	$car = new Car();
	$car->move();
	$aircraft = new Aircraft();
	$aircraft->fly();
?>
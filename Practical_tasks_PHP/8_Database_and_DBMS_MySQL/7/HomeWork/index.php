<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'mysql');
	define('DB_PASSWORD', 'mysql');
	define('DB_NAME', 'mysite');

	$mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD);
	if ($mysqli->connect_errno) exit ('Ошибка соединения с БД');
	$mysqli->set_charset('utf8');

	$mysqli->query('CREATE DATABASE `newbd`');
	$mysqli->query('DROP DATABASE `newbd`');
	$mysqli->query('DROP DATABASE `mytime`');
	$mysqli->close();
?>
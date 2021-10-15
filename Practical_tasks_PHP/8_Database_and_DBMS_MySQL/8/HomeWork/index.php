<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'mysql');
	define('DB_PASSWORD', 'mysql');
	define('DB_NAME', 'mysite');

	$mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD);
	if ($mysqli->connect_errno) exit ('Ошибка соединения с БД');
	$mysqli->set_charset('utf8');

	$mysqli->query('CREATE DATABASE `time_zone`');

	$query = 'CREATE TABLE `time_zone`.`secret_timezone` 
	( `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  	`title` varchar(255) NOT NULL,
  	`offset` int(10) NOT NULL , 
	PRIMARY KEY (`id`),
  	UNIQUE KEY `title` (`title`),
  	KEY `offset` (`offset`)) 
	ENGINE = MyISAM CHARSET=utf8 COLLATE utf8_general_ci;';
	echo $mysqli->query($query).'<br/>';


	$mysqli->close();
?>
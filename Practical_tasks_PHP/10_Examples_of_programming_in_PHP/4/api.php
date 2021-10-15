<?php
if (isset($_POST['func']) && $_POST['func'] == '1') {
	define('DB_HOST', 'localhost');
	define('DB_USER', 'mysql');
	define('DB_PASSWORD', 'mysql');
	define('DB_NAME', 'mysite');
	try {
		$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		$query = 'SELECT * from `secret_users` ORDER BY rand() LIMIT 1';
		$result = $pdo->query($query);
		$row = $result->fetch(PDO::FETCH_ASSOC);
		echo json_encode($row);
	} catch (PDOException $e) {
		echo 'Ошибка: '.$e->getMessage();
	}

}
?>
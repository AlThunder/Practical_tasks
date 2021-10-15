<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'mysql');
	define('DB_PASSWORD', 'mysql');
	define('DB_NAME', 'mysite');
	try {
		$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	} catch (PDOExeption $e) {
		echo 'Ошибка при подключении к базе данных';
	}

	$query = 'SELECT * FROM `secret_users`';
	$result = $pdo->query($query);
	$row = $result->fetch(/*PDO::FETCH_ASSOC*/); //$mysqli->fetch_assoc
	print_r($row);
	echo '<br/>';
	try {
		$query = 'INSERT INTO `secret_articles` (`user_id`, `title`, `text`, `date`)
		VALUES ("1", "Новая статья", "Текст этой новой статьи...", UNIX_TIMESTAMP())';
		$result = $pdo->exec($query);
		$last_id = $pdo->lastInsertId();
		echo $result.' - '.$last_id.'<br/>';
	} catch (PDOException $e) {
		echo 'Ошибка в запросе:'.$e->getMessage() ;
	}

	$query = 'UPDATE `secret_articles` SET `date` = `date` + 1';
	$result = $pdo->exec($query);
	echo $result.'<br/>';

	$query = "DELETE FROM `secret_articles` WHERE `id` = '$last_id'";
	$result = $pdo->exec($query);
	echo $result.'<br/>';

	$query = 'SELECT * FROM `secret_users`';
	$result = $pdo->query($query);
	$table = $result->fetchAll(PDO::FETCH_ASSOC);
	print_r($table);

	$email = 'vasya@mail.ru'; // Допустим, получено из формы
	$query = 'SELECT * FROM `secret_users` WHERE `email` = ?';
	$query = $pdo->prepare($query);
	$query->execute([$email]);
	$row = $query->fetch();
	print_r($row);
?>
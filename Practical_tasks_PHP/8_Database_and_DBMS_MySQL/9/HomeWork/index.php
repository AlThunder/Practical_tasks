<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'mysql');
	define('DB_PASSWORD', 'mysql');
	define('DB_NAME', 'time_zone');

	$mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if ($mysqli->connect_errno) exit ('Ошибка соединения с БД');
	$mysqli->set_charset('utf8');

	
	/*$mysqli->query("INSERT INTO `secret_users` 
	(`id`, `name`, `email`, `password`, `balance`, `ip_reg`, `date_reg`) 
	VALUES (NULL, 'Вячеслав', 'v1@mail.ru', MD5('123'), '0.00', INET_ATON('127.0.0.1'), UNIX_TIMESTAMP())");*/
	
	if (isset($_POST['throw'])) {
		$title = $mysqli->real_escape_string(htmlspecialchars($_POST['title']));
		$offset = $mysqli->real_escape_string(htmlspecialchars($_POST['offset']));
		
		if ((!is_numeric($offset)) | ((-39001 < @$offset) && (43201 > @$offset) != 1) | (@is_int($offset / 60) != 1)) {
			echo 'В поле "Смещение" должно быть число в секундах соответсвующее смещению часового пояса!';
		} elseif (!preg_match('/([a-zA-Z\s.-]*)\/([a-zA-Z\s.-]*)/', $title)) {
			echo 'Часовой пояс должен быть введен в формате "Russia/Moscow"!';
		} elseif (($title != false) & ($offset != false)) {
			$query = "INSERT INTO `secret_timezone` 
			(`title`, `offset`) 
			VALUES ('$title', '$offset')";
			$result = $mysqli->query($query);
		} else echo 'Одно из полей не заполнено!';
		
	}

	$mysqli->query("UPDATE `secret_timezone` 
		SET `title` = 'USA/New-York', `offset` = '-18000'
		WHERE `secret_timezone`.`id` = 25;");

	$mysqli->query("DELETE FROM `secret_timezone` 
		WHERE `secret_timezone`.`id` = 23");
	
	$mysqli->close();


?>
<?php if (isset($result)) { ?>
	<?php if ($result) { ?>
		<p>Регистрация прошла успешно!</p>
	<?php } else { ?>
		<p>Ошибка при регистрации! Такой пояс уже зарегистрирован!</p>
	<?php } ?>
<?php } ?>
<form name='reg' action='index.php' method='post'>
	<p>
		Часовой пояс: <input type='text' name='title' />
	</p>
	<p>
		Смещение: <input type='text' name='offset' />
	</p>
	<p>
		<input type='submit' name='throw' value='Отправить' />
	</p>
</form>
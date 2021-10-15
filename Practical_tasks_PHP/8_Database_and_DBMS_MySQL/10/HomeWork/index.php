<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'mysql');
	define('DB_PASSWORD', 'mysql');
	define('DB_NAME', 'time_zone');


	$mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if ($mysqli->connect_errno) exit ('Ошибка соединения с БД');
	$mysqli->set_charset('utf8');

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

	$result_set = $mysqli->query('SELECT `title`, `offset` FROM `secret_timezone`');
	$table = [];
	while (($row = $result_set->fetch_assoc()) !=false) {
		$table[] = $row;
	}
	//print_r($table);
	$array = [];
	$i = 2;
	foreach ($table as $key ) {
		foreach ($key as $k => $value){
			if(is_int($i/2)){
				$x = $value;
			}
			if(!is_int($i/2)) {
				$array[$x] = $value ;
				if (@$_POST['select'] == $x) {
					echo "Смещение от Гринвича: $value секунд;";
				}
			}
			$i++;
		}
	}
	//print_r($array);

	
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
<form name="myform" action="index.php" method="post">
		<select name="select">
			<option>Выберите Ваш часовой пояс</option>
<?php
	foreach ($table as $key) {
		foreach ($key as $k => $value){
			if ($k == 'title') { 
			echo '<option value="'.htmlspecialchars($value).'">'.htmlspecialchars($value).'</option>';
			} 
		}
	}
?>			
		</select>
		<input type="submit" value="Отправить">
</form>
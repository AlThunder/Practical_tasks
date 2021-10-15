<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'mysql');
	define('DB_PASSWORD', 'mysql');
	define('DB_NAME', 'time_zone');

	try {
		$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	} catch (PDOExeption $e) {
		echo 'Ошибка при подключении к базе данных';
	}

	$query = 'SELECT * FROM `secret_timezone`';
	$r = $pdo->query($query);
	$row = $r->fetch(PDO::FETCH_ASSOC);

	if (isset($_POST['throw'])) {
		$title = $_POST['title'];
		$offset = $_POST['offset'];
		if ((!is_numeric($offset)) | ((-39001 < @$offset) && (43201 > @$offset) != 1) | (@is_int($offset / 60) != 1)) {
			echo 'В поле "Смещение" должно быть число в секундах соответсвующее смещению часового пояса!';
		} elseif (!preg_match('/([a-zA-Z\s.-]*)\/([a-zA-Z\s.-]*)/', $title)) {
			echo 'Часовой пояс должен быть введен в формате "Russia/Moscow"!';
		} elseif (($title != false) & ($offset != false)) {
			try {
				$query = "INSERT INTO `secret_timezone` (`title`, `offset`) 
				VALUES (?, ?)";
				$query = $pdo->prepare($query);
				$result = $query->execute([$title, $offset]);
				
			}  catch (PDOException $e) {
				echo 'Ошибка в запросе:'.$e->getMessage() ;
			}
		} else echo 'Одно из полей не заполнено!';
		
	}
	
	$query = 'SELECT `title`, `offset` FROM `secret_timezone`';
	$r = $pdo->query($query);
	$table = $r->fetchAll(PDO::FETCH_ASSOC);
	//print_r($table);
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
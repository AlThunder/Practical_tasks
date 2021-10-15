<?php
	

	

	

	if (isset($_POST['throw'])) {
		$name_reg = $_POST['name_reg'];
		$login_reg = $_POST['login_reg'];
		$pass_reg = $_POST['pass_reg'];
		if (($name_reg != false) & ($login_reg != false) & ($pass_reg != false) & (Captcha::check($_POST['captcha']))) {
			try {
				$query = "INSERT INTO `new_secret_users` (`name`, `login`, `password`) 
				VALUES (?, ?, ?)";
				$query = $pdo->prepare($query);
				$result = $query->execute([$name_reg, $login_reg, $pass_reg]);
				echo 'Регистрация прошла успешно!';
			}  catch (PDOException $e) {
				echo 'Ошибка в запросе:'.$e->getMessage() ;
			}
		} else echo 'Одно из полей заполнено неверно или не заполнено!';
		
	}
	
	/*$query = 'SELECT `title`, `offset` FROM `secret_timezone`';
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
	}*/
	//print_r($array);
	/*<?php if (isset($result)) { ?>
	<?php if ($result) { ?>
		<p>Регистрация прошла успешно!</p>
	<?php } else { ?>
		<p>Ошибка при регистрации! Такой пояс уже зарегистрирован!</p>
	<?php } ?>
<?php } 
?>*/
?>
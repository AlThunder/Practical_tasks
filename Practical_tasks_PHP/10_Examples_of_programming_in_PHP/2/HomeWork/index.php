<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'mysql');
define('DB_PASSWORD', 'mysql');
define('DB_NAME', 'registration');

try {
	$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOExeption $e) {
	echo 'Ошибка при подключении к базе данных';
}

$query = 'SELECT * FROM `new_secret_users`';
$r = $pdo->query($query);
$row = $r->fetch(PDO::FETCH_ASSOC);
require_once 'captcha_class.php';
require_once 'registration_class.php';
require_once 'authotity_class.php';
/*if (isset($_POST['throw'])) {
	if (Captcha::check($_POST['captcha'])) echo 'Регистрация прошла успешно!';
	else echo 'Проверочный код введен неверно!';
}*/

?>
<?php if ($error) { ?><p>Неверные логин и/или пароль!</p><?php } ?>
<?php if ($auth) { ?>
	<p>Здравствуйте, <?=$login?>!</p>
	<a href='index.php?f=logout'>Выход</a>
<?php } else { ?>
<form name="choice" method="post" action="index.php">
	<p>
		<input type="submit" name="r" value="Регистрация" />
	</p>
	<p>
		<input type="submit" name="a" value="Авторизация" />
	</p>
<?php if (isset($_POST['r'])) { ?><form name="reg" method="post" action="index.php">
	<p>Регистрация</p>
	<p>
		Введите Ваше имя: <input type="text" name="name_reg" />
	</p>
	<p>
		Введите Ваш логин: <input type="text" name="login_reg" />
	</p>
	<p>
		Придумайте пароль: <input type="password" name="pass_reg" />
	</p>
	<p>
		Проверочный код: <input type='text' name='captcha' />
	</p>
	<p>
		<img src='captcha.php' alt=''/>
	</p>
	<p>
		<input type="submit" name="throw" value="Зарегистрироваться" />
	</p>
</form>
<?php } elseif(isset($_POST['a'])) { ?><form name="au" method="post" action="index.php">
	<p>Авторизация</p>
	<p>
		Логин: <input type="text" name="login_au" />
	</p>
	<p>
		Пароль: <input type="password" name="pass_au" />
	</p>
	<p>
		<input type="submit" name="auth" value="Войти" />
	</p>
</form>
<?php }}?>
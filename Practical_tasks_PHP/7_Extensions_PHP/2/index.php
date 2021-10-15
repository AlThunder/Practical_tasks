<?php
	$a = $_GET['a']?? false;
	$a = htmlspecialchars($a);
	echo $a;
	echo '<br/>';

	$email_1 = 'abc@mail.ru';
	$email_2 = 'abcmail.ru';

	echo filter_var($email_1, FILTER_VALIDATE_EMAIL);
	echo '<br/>';
	echo filter_var($email_2, FILTER_VALIDATE_EMAIL);
	echo '<br/>';

	$ip = '127.0.0.1';
	echo filter_var($ip, FILTER_VALIDATE_IP).'<br/>';

	$url = 'https://myrusakov.ru';
	echo filter_var($url, FILTER_VALIDATE_URL).'<br/>';

	if(filter_var($email_1, FILTER_VALIDATE_EMAIL)) echo 'Данные прошли проверку';
	else echo 'Данные проверку не прошли';
	echo '<br/>';

	$n = '5';
	echo filter_var($n, FILTER_VALIDATE_INT).'<br/>';

	$d = '5.5';
	echo filter_var($d, FILTER_VALIDATE_FLOAT).'<br/>';

	$b = 'On';
	echo filter_var($b, FILTER_VALIDATE_BOOLEAN).'<br/>';

	$b = 'Yes';
	echo filter_var($b, FILTER_VALIDATE_BOOLEAN).'<br/>';
?>
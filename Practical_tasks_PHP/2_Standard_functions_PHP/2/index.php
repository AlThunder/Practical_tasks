<?php
	$s_1 = 'Hello world!';
	$s_2 = 'Привет, мир!';
	echo $s_1[1].'<br/>';
	echo $s_2[1].'<br/>';

	echo strlen($s_1).'<br/>';
	echo strlen($s_2).'<br/>';

	echo mb_strlen($s_1).'<br/>';
	echo mb_strlen($s_2).'<br/>';

	echo strpos($s_1, 'llo').'<br/>';
	if (strpos($s_1, 'Hell') !== false) echo 'Подстрока найдена';
	else echo 'Подстрока не найдена';
	echo '<br/>'; 

	echo substr($s_1, 3, 2).'<br/>';
	echo substr($s_1, 3).'<br/>';
	echo mb_substr($s_2, 3).'<br/>';

	$email = '           abc@abc.ru       ';
	echo $email.'<br/>';
	echo trim($email).'<br/>';

	echo str_replace('и', 'а', $s_2).'<br/>';

	$text = "Здравствуйте, %name%! Вы зарегистрировались у меня на сайте %site%!";
	echo str_replace(['%name%', '%site%'], ['Михаил', 'MyRusakov.ru'], $text);
	echo '<br/>'; 

	echo mb_strtolower($s_1).'<br/>';
	echo mb_strtoupper($s_1).'<br/>';

	echo '<a href="index.php?a='.urlencode('ttt ttt & ttt').'">Ссылка</a><br/>';
	echo urldecode('ttt+ttt+%26+ttt').'<br/>';

	$s_3 = '<a><img>"\' &';
	echo htmlspecialchars($s_3, ENT_QUOTES).'<br/>';

	echo strip_tags($s_3, '<img>').'<br/>';

	echo md5($s_3).'<br/>';

	echo uniqid().'<br/>';

	$text = 'Это длинная строка, в которой написано очень много непонятно чего.';
	echo $text.'<br/>';
	echo wordwrap($text, 20).'<br/>';

	echo nl2br(wordwrap($text, 20)).'<br/>';

	$m_1 = "68";
	$m_2 = "75.43";

	echo sprintf('%.2f', $m_1).'<br/>';
	echo sprintf('%.2f', $m_2).'<br/>';


?>
	

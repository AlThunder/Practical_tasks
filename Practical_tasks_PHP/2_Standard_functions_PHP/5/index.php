<?php
	$handler = fopen('a.txt', 'a+');
	$count = 1;
	$str = '';
	while(!feof($handler)){
		$str .= fread($handler, $count);
	}
	echo $str;
	//echo fread($handler, 3000000000);
	echo '<br/>';

	fseek($handler, 0);
	echo fread($handler, filesize('a.txt'));

	//fwrite($handler, "\nNew string");
	fclose($handler);
	echo '<br/>';

	$str = file_get_contents("a.txt");
	echo $str.'<br/>';

	$str = file_put_contents('a.txt',file_get_contents("a.txt").' Танюха-Валюха');

	//echo file_get_contents('https://yandex.ru');

	copy('a.txt', 'b.txt');

	rename('b.txt', 'new.php');

	unlink('new.php');

	echo '<br/>';
	$handler = tmpfile();

	fwrite($handler, 'abc');
	fseek($handler, 0);
	echo fread($handler, 3);
?>
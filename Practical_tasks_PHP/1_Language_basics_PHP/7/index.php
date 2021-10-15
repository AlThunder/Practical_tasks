<?php
	header ("Refresh: 1");
	$s_1 = "My string";
	$s_2 = "New string";
	echo $s_1.' - '.$s_2. '<br/>';
	$s = $s_1.$s_2;
	echo $s;
	echo "<br/>Символ с индексом 3 (позиция №4) в строке \$s_1\": <b>".$s_1[3]."</b>";

	echo '<br/>Тут переменная $s_1 не подставится';

	echo "<br/>Тут будет ошибка {$s_1}N";
	echo "<br/>Выводим слэш /";
	echo "<br/>Выводим обратный слэш \\";
	echo '<br/>';

	$res = `time`;
	echo $res;
	echo '</br>';
	echo iconv("CP866", "UTF-8", $res);
?>

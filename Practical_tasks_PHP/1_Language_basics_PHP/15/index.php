<?php
	$arr = ["Michael", "Rusakov", 26];
	$firstname = $arr[0];
	$surname = $arr[1];
	$age = $arr[2];

	echo "$firstname, $surname, $age";
	echo '<br/>';

	list($firstname, $surname, $age) = $arr;

	echo "$firstname, $surname, $age";
	echo '<br/>';

	list(,$surname, $age) = $arr;
	echo "$surname, $age";
	echo '<br/>';

	$arr_1 = ["name_1" =>"Michael", "name_2" => "Igor"];
	$arr_2 = ["name_3" => "Alex", "name_4" => "Homer"];
	$arr = $arr_1 + $arr_2;
	foreach ($arr as $value) echo $value.', ';
	echo '<br/>';


	$arr_1 = ["name_1" =>"Michael", "name_2" => "Igor"];
	$arr_2 = ["name_1" => "Alex", "name_2" => "Homer", "name_3" => "Bart"];
	$arr = $arr_1 + $arr_2;
	foreach ($arr as $value) echo $value.', ';
	echo '<br/>';

	echo "Элемент равен {$arr_1['name_1']}";
?>
<?php
	$str ='a 8M';
	$reg ='/a \dM/';
	echo preg_match($reg, $str, $matches);
	echo '<br/>';
	print_r($matches);
	$str ='a M';
	echo preg_match($reg, $str);
	echo '<br/>';

	$reg = '#a \d b#';
	$str = ' asdasdasa 8 basdasdasd';
	echo preg_match($reg, $str);
	echo '<br/>';

	$reg = '#a \D b#';
	$str = ' asdasdasa   b333asdasd';
	echo preg_match($reg, $str);
	echo '<br/>';

	$reg = '#a \w b#';
	$str = ' asdasdasa d basdasdasd';
	echo preg_match($reg, $str);
	echo '<br/>';

	$reg = '#a \W b#';
	$str = ' asdasdasa   basdasdasd';
	echo preg_match($reg, $str);
	echo '<br/>';

	$reg = '#a \s b#';
	$str = " asdasdasa \t basdasdasd";
	echo preg_match($reg, $str);
	echo '<br/>';

	$reg = '#a \S b#';
	$str = ' asdasdasa 8 basdasdasd';
	echo preg_match($reg, $str);
	echo '<br/>';

?>
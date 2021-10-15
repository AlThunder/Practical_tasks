<?php
	$arr = [1, 3, 5, 10,];
	foreach ($arr as &$v) $v *= 2;
	unset($v);
	//foreach ($arr as $v) echo $v." - ";
	
	print_r($arr);
	var_dump($arr);
	var_export($arr);
	

?>

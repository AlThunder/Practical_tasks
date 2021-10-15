<?php
	$d = date('Y.m.d H:i:s');
	echo $d;
	$reg = '#(\d{4}).(\d{2}).(\d{2})\s(\d{2}):(\d{2}):(\d{2})#';
	echo preg_match_all($reg, $d, $matches).'<br/>';
	print_r($matches);
?>
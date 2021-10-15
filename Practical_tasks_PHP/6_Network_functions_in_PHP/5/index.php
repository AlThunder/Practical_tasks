<?php
	$url = 'http://myrusakov.ru/abc.html?id=7&page=8&x=9';
	$arr = parse_url($url);
	print_r($arr);
	echo '<br/>';
	parse_str($arr['query'], $query);
	$query['y'] = 10;
	unset($query['x']);
	print_r($query);
	echo '<br/>';
	$query = http_build_query($query);
	echo $query.'<br/>';
	$url = $arr['scheme'].'://'.$arr['host'].$arr['path'].'?'.$query;
	echo $url.'<br/>';
?>
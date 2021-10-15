<?php
	
	$url = 'http://mysite.local/?page=1&ref=partner';
	$arr = parse_url($url);
	parse_str($arr['query'], $query);
	$save = 0;
	if (isset($_COOKIE['save'])) {
		$save = $_COOKIE['save'];
	}
	setcookie('save', $query['ref'], time() + 3600);
	unset($query['ref']);
	
	$query = http_build_query($query);
	$url = $arr['scheme'].'://'.$arr['host'].$arr['path'].'?'.$query;
	//echo $save;
	header('Location: '."$url");

	die;
	
	
	

?>
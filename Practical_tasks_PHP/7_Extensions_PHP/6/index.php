<?php
	$ch = curl_init('http://mysite.local/script.php');

	//curl_setopt($ch, CURLOPT_HEADER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_REFERER, 'https://abc.ru');
	curl_setopt($ch, CURLOPT_COOKIE, 'login=Admin;password=123');
	curl_setopt($ch, CURLOPT_POSTFIELDS, 'x=5&y=10');



	$result = curl_exec($ch);
	echo $result;
	curl_close($ch);

	$ch = curl_init('http://google.ru');

	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_HEADER, true);
	curl_setopt($ch, CURLOPT_NOBODY, true);
	//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	$result = curl_exec($ch);

	preg_match('/Set-Cookie: NID=(.*?);/i', $result, $matches);
	print_r($matches);

	
	echo $result;
	curl_close($ch);
?>
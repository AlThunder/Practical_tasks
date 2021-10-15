<?php
	$ip_address = gethostbyname('gotika2.ru');
	echo $ip_address.'<br/>';
	$hostname = gethostbyaddr($ip_address);
	echo $hostname.'<br/>';
?>
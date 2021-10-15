<?php
	$arr = parse_ini_file('config.ini', true, INI_SCANNER_NORMAL);
	$arr = parse_ini_file('config.ini', true, INI_SCANNER_RAW);
	$arr = parse_ini_file('config.ini', true, INI_SCANNER_TYPED);

	print_r($arr);

	echo '<br/>';
	echo $arr['Config']['site'];
?>
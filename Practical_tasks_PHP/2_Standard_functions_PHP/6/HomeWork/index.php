<?php
	if ($_GET == false){
		$_GET = false;
	}
	$arr = parse_ini_file('config.ini', true, INI_SCANNER_NORMAL);
	$cl = $arr['Config']['color'];
	$sz = $arr['Config']['size'];
	$l = false;

	$lang_1 = parse_ini_file('ru.ini', true, INI_SCANNER_NORMAL);
	$lang_2 = parse_ini_file('en.ini', true, INI_SCANNER_NORMAL);

	for($i = 0; $i < 2; $i++){
	 $l =$l.$_SERVER['HTTP_ACCEPT_LANGUAGE'][$i];
	}
	if (($_GET["lang"] == 'en') && ($_GET["lang"] != false)){
		print_r($lang_2);
	} elseif ($_GET["lang"] == 'ru'){
		print_r($lang_1);
	} elseif($l == 'ru'){
		print_r($lang_1);
	} elseif ($l == 'en'){
		print_r($lang_2);
	}

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>font-size</title>
<style>p{<?=$sz?>; <?=$cl?>;}</style>
</head>
<body>
<p>Для задания абсолютного размера</p> используются следующие значения: xx-small, x-small, small, medium, large, x-large, xx-large. Их соответствие с размером шрифта в HTML приведено в табл. 1.
</body>
</html>
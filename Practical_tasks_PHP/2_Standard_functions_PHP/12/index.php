<?php
	$reg = '/a . b/';
	$str = 'a . b';
	echo preg_match($reg, $str).'<br/>';

	$reg = '/^ab/';
	$str = 'abbb';
	echo preg_match($reg, $str).'<br/>';

	$reg = '/ab$/';
	$str = 'abaaaab';
	echo preg_match($reg, $str).'<br/>';

	$reg = '/a [a-z][0-5] b/';
	$str = 'a c6 b';
	echo preg_match($reg, $str).'<br/>';

	$reg = '/a [^a-z] b/';
	$str = 'a 6 b';
	echo preg_match($reg, $str).'<br/>';

	$reg = '/a ([a-z]a\d) (b)$/';
	$str = 'a aa5 b';
	echo preg_match($reg, $str, $matches).'<br/>';
	print_r($matches);
	echo '<br/>';

	$reg = '/a ([a-z]a)* b$/';
	$str = 'a aa b';
	echo preg_match($reg, $str).'<br/>';

	$reg = '/a a? b$/';
	$str = 'a aa b';
	echo preg_match($reg, $str).'<br/>';

	$reg = '/a \d{3} b$/';
	$str = 'a 333 b';
	echo preg_match($reg, $str).'<br/>';

	$reg = '/a \d{3,} b$/';
	$str = 'a 3335 b';
	echo preg_match($reg, $str).'<br/>';

	$reg = '/a \d{3,5} b$/';
	$str = 'a 333 b';
	echo preg_match($reg, $str).'<br/>';

	$reg = '/a \d{3,5} b$/i';
	$str = 'A 333 b';
	echo preg_match($reg, $str).'<br/>';

	$reg = '/a\s\d{3,5} b$/ix';
	$str = 'a333b';
	echo preg_match($reg, $str).'<br/>';

	$reg = '/ab$/m';
	$str = "ab\nddd";
	echo preg_match($reg, $str).'<br/>';

	$reg = '/".*?"/m';
	$str = 'abc "23" abc "45"';
	echo preg_match_all($reg, $str, $matches).'<br/>';
	print_r($matches);
?>
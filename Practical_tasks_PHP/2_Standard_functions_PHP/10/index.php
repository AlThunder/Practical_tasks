<?php
	$str = 'dir';

	//echo iconv('CP866', 'UTF-8', $str).'<br/>';

	//system('dir');

	$str = exec('dir');
	echo iconv('CP866', 'UTF-8', $str).'<br/>';

	exec('C:\Новый текстовый документ.txt')

?>
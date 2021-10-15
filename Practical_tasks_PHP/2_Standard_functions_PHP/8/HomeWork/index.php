<?php
	for ($i = 0; $i < 5; $i++){
		mkdir(uniqid(''), true);
	}
	function crEate($file){
		$f = scandir($file);
		$arr = [];
		$n = 0;
		for ($i = 2; $i < count($f); $i++){
			if (is_dir($f[$i]) == 1){
				$arr[$n] = $f[$i];
				$n++;
			}
		}
		fopen($arr[mt_rand(0, count($arr))]."\\".uniqid(''), 'a+');
	};
	crEate('W:\domains\mysite.local');
	function dEl ($dir)
	{
		$f = scandir($dir);
		$arr = [];
		$n = 0;
		for ($i = 2; $i < count($f); $i++){
			if (is_dir($f[$i]) == 1){
				$arr[$n] = $f[$i];
				$n++;
			}
		}
		foreach ( $arr as $file){
			if (glob("$file\*") != false){
				unlink(glob("$file\*")[0]);
				rmdir($file);	
			} else rmdir($file);
			
		}
	}
	dEl('W:\domains\mysite.local');
?>
<?php
	$w = ('W:\modules');
	function printDir ($w, $space =''){
		$dir = dir($w);
		while (($file = $dir->read()) !== false) {
			if ($file == '.' || $file == '..') continue;
			echo $space.$file.'<br/>';
			$d = $w."/$file";
			if (is_dir($d) !== false) printDir($d, $space.'&nbsp;&nbsp;&nbsp;&nbsp;*');	
		}
		$dir->close();
	}
	printDir($w);
	
?>
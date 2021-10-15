<?php
	// + «57abc», «a7cdc» и «A889c», и - «/7abc», «57abd».
	$reg = '#\w\S\S\Sc#';
	$str = ['57abc', 'a7cdc', 'A889c', '/7abc', '57abd'];

	function fInd_sp($r, $s)
	{
		foreach ($s as $var){
			if (preg_match($r, $var) != false){
				echo "$var совпадает с шаблоном<br/>";
			} else echo "$var не совпадает с шаблоном<br/>";  
		}
	}
	fInd_sp($reg, $str);
?>
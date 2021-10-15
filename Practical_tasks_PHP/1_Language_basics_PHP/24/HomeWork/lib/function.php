<?php	
	$a = function($arr) 
	{
	$i = 1;
		foreach ($arr as $value){
			if (is_int(($i+2)/2) == false){
				unset($value);
			} else echo $value;
		$i++;
		}
	};
?>
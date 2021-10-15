<?php
	$one = [1, 2, 3, 4, 5];
	$two = [6, 7, 8, 9, 10, 11, 12];
	$s = array_merge($one, $two);
	$a = 0;
		for ($i = 0; $i < count($s); $i++) {
			$a = $s[$i]/2;
			if (is_int($a) == true)
				echo $s[$i].'<br/>';
			
		}
	


?>
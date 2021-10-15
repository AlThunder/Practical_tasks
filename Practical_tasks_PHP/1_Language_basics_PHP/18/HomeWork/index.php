<?php
	function stepeN($a, $b){
		if ($b == 0) return 1;
		return $a * stepeN($a, $b - 1);

	}
 echo stepeN(3, 4);
?>
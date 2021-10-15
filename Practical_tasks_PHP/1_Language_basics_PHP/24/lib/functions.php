<?php
	function summa($x, $y){
		if ($x !== false && $y !== false && is_numeric($x) && is_numeric($y)) return $x + $y;
		return false;
	}
?>

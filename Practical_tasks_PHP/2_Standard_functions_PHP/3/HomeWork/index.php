<?php
	$a = [5, 19, 7, 31, 66];
	echo $a[mt_rand(0, 4)];
	echo '<br/>';

	shuffle($a);
	echo $a[mt_rand(0, 4)];
	echo '<br/>';

	$list = [['name' => 'Pasha', 'age' => '28'],
		['name' => 'Oleg', 'age' => '34'],
		['name' => 'Tolya', 'age' => '22'], 
		['name' => 'Egor', 'age' => '37']
	];
	print_r($list);
	echo '<br/>';
	function mySort($a, $b){
		if($a > $b) return 1;
		if($a < $b) return -1;
		return ($a <=> $b);
	}
	uasort($list, 'mySort');
	print_r($list);
	echo '<br/>';

?>


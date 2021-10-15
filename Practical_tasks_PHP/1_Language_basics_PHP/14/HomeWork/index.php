<?php
	$arr = [
		[
			'name' => 'Vitya',
			'age' => 30
		],
		[
			'name' => 'Egor',
			'age' => 19
		],
		[
			'name' => 'Olga',
			'age' => 23
		],
	];
	$s = 0;
 	foreach ($arr as $key => $value) {
		$s = ($value['age'] + $s);
	}
	$s = $s/count($arr);
	echo $s;


?>
<?php
	$arr = array (1, 5, -1, 0, 5);
	
	$arr = [1, 5, -1, 0, 5, true, "My stryng"];
	echo $arr[6];
	echo '<br/>';
	for ($i = 0; $i < count($arr); $i++){
		echo $arr[$i].'<br/>';
	}
	$arr_2 = ['name'=> "Michael", "age" => 26];
	echo $arr_2['name'];
	echo '<br/>';
	$arr_3 = [[1, 2],[3,5,7]];
	echo $arr_3[0][1].'<br/>';
	echo $arr_3[1][0].'<br/>';

	echo '<br/>';
	for ($i = 0; $i < count($arr_3); $i++){
		for ($j = 0; $j < count($arr_3[$i]); $j++) echo $arr_3[$i][$j].'<br/>';
	}
	
	echo '<br/>';

	$staff = [
		[
			'name' => 'Michael',
			'age' => 26
		],
		[
			'name' => 'Igor',
			'age' => 30
		],
		[
			'name' => 'Alex',
			'age' => 20
		]
	];
	echo $staff[1]['age'];
?>
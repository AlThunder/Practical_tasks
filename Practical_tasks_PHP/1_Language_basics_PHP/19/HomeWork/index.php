<?php
	/*$a = function($x, $y){
		$sum = $x + $y;
		echo $sum.'<br/>';
	};
	$a(2, 3);
	function koD($arr, $func){
		$i = 0;
		foreach ($arr as $value) {
			echo $value.$func;
			$i++;
			if (is_numeric($value) !== true){
				echo "Значение $value не числовое";
			}
			
		}
		if (is_int($i/2) == false){
			echo 'Массив $arr имеет нечетное число элементов';
			}

	}

	/*function test($a, $func)
	{
		$arr = [];
		for ($i = 0; $i < $a; $i++)
		{
			$arr[] = $func($i);
		}
	return $arr;
	}

	$r = test (10, function($f)
	{
		return $f * $f;
	});

	foreach ($r as $v) echo $v.", ";*/
	/*$r = [1, 2, 3, 4];
	$i = 0;
	$s = false;
	foreach ($r as $value){
		$s = 1 ;
	}*/



 
	$sum = function ($a, $b)
	{
    	return $a + $b;
	};
 
 
	function test(array $data)
	{
    	foreach (array_chunk($data, 2) as $numbers) {
        echo "$numbers[0], $numbers[1]";
    	}
	}
 
	$numbers = [2, 3, 4, 5, 6, 7];
 
	test($numbers);
	

?>
<?php
	$a = function($arr)
	{
		$aver = false;
		for ($i = 0; $i < count($arr); $i++){
			$aver = $arr[$i] + $aver;
		}
		$aver = $aver / count($arr);
		return $aver;
	};
	$m = [4, 6, 8, 10];
	echo $a($m);
	echo '<br/>';
	function gener1(){
		echo '1';
		yield 4;
		echo '2';
		yield 2;
		echo '3';
		yield 3;
	}
	foreach (gener1() as $value) {
		echo " - из цикла $value<br/>";
	}
	function gener2($arr, $func)
	{	
		$i = 0;
		foreach ($arr as $key => $value){
			
			echo $func($value).' - ';
			yield $key;
		} 
	}
	$mas = [[1, 2, 3], [4, 5, 6, 7]];
	foreach(gener2($mas, $a) as $value){
		$value = $value + 1;
		echo "Среднее значение $value - го массива; ";
	}
?>
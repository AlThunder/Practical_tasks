<?php
	$arr =[['piter' => [['economisty'=> ['Vasya' => 38, 'Dima' => 18]], ['inzhinery' => ['Yulya' => 24, 'Katya' => 22]]],
		['moskow' => [['economisty' => ['Petya' => 23, 'Kolya' => 29]], ['inzhinery' => ['Sasha' => 25, 'Volodya' => 27]]]
	]]];
	
	$arr2 = [[1, 2, 3, 4],[5, 6, 7]];
	function vivoD($x)
	{
		echo '<pre>';
		var_export($x);
		echo '</pre>';
		
	}
	vivoD($arr);

?>

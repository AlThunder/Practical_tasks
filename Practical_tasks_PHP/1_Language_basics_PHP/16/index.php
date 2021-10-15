<?php
	$one = [1, 2, 4, 5, 7];
	$two = [6, 7, 8, 9, 'nechislo', 11, 12];
	$x = 1;
	$y =[];

	function myarRay($x){
		$s = false;
		$a = false;
		if (is_array($x) == true) foreach ($x as $key){
			if (is_numeric($key) == false){
			$a = 2;
			}  
		}
		if(is_array($x) == false || (empty($x) == 1) || ($a == 2)) {
			echo 'Некорректный массив';
		}  else {
			echo 'Сумма элементов равна '; for ($i = 0; $i < count($x); $i++){
			$s = $s + $x[$i];		
			}
		}
		echo $s;
	}
 	myarRay($b);

?>
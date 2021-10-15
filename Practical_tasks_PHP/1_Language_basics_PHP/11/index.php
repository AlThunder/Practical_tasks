<?php
	$i = 0;
	while ($i < 10) {
		echo "$i<br/>";
		$i++;
	}

	$summa = 0;
	$n = 10;
	$i = 0;
	while ($i <= 10) {
		$summa += $i;
		$i++;
	}
	echo "Сумма чисел от 1 до $n равна $summa";
	echo '<br/>';

	$x = 0;
	do {
		echo $x;
	} while ($x > 10);
	echo '<br/>';

	$i = 0;
	while ($i < 10) :
		echo "$i<br/>";
		$i++;
	endwhile;
 
?>
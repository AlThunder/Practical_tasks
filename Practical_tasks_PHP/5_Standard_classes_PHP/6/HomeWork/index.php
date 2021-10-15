<?php
	$rows = 2000; //строки, tr
	$cols = 2; //столбцы, td
	$k = 1;
	$vew = IntlChar::chr($k);
	$table = '<table border="1">';

	for ($tr = 1; $tr <= $rows; $tr++) {
		$table .= '<tr>';
		$table .= '<td>'.$k++.'</td>';
		$vew = IntlChar::chr($k);
		$table .= '<td>'.$vew.'</td>';
		$table .='</tr>';
	}

	$table .= '</table>';
	echo $table;
?>
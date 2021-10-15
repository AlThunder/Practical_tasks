<?php
require_once 'main.php';
$q = new Query();
echo 'Привет, админ!';
$rows = $q->QueryCount(); //строки, tr
	$cols = 4; //столбцы, td
	$k = 0;
	$vew = IntlChar::chr($k);
	$table = '<table border="1">';
	$table .= '<tr>';
	$table .= '<td>ID заказа</td>';
	$table .= '<td>Заказанные товары</td>';
	$table .= '<td>Общая стоимость</td>';
	$table .= '<td>Телефон клиента</td>';
	$table .='</tr>';
	for ($tr = 1; $tr <= $rows; $tr++) {
		$id = $q->QueryOrder($k, 'id');
		$table .= '<tr>';
		$table .= '<td>'.$id.'</td>';
		$table .= '<td>'.$q->QueryNamesOrder($q->QueryOrderX($id, 'id_products')).'</td>';
		$table .= '<td>'.$q->QueryOrderX($id, 'suuma_order').'</td>';
		$table .= '<td>'.$q->QueryOrderX($id, 'phone').'</td>';
		$table .='</tr>';
		$k++;
	}
	$table .= '</table>';
	echo $table;
?>
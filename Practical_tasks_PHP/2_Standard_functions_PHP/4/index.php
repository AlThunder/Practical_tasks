<?php
	$start = microtime(true);
	echo $start;
	echo '<br/>';
	
	$time = time();
	echo $time.'<br/>';

	echo 'Текущее время: '.date('d.m.Y H:i:s');
	echo '<br/>';


	$time = mktime(2, 0, 30, 5, 10, 2017);

	echo 'Получившееся дата и время: '.date('d.m.Y H:i:s', $time);
	echo '<br/>';

	$time = strtotime('12.05.2016');
	echo $time.'<br/>';
	echo date("Y.m.d", $time);
	echo '<br/>';

	$d = 29;
	$m = 2;
	$y = 2016;
	if (checkdate($m, $d, $y)) echo 'Дата корректна';
	else echo 'Дата не корректна';
	echo '<br/>';

	function getGM($local){
		$offset = date("Z", $local);
		return $local - $offset;
	}
	function getLM($gm, $offset){
		return $gm + $offset;
	}
	echo date('Y.m.d H:i:s', getGM(time()));
	echo '<br/>';
	echo date('Y.m.d H:i:s', getLM(getGM(time()), 3600 * 2));



	echo '<br />Время работы скрипта: '.(microtime(true) - $start);
?>
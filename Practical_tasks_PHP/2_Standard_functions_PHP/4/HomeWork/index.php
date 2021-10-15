<?php
	$start = microtime(true);
	for($i = 0; $i < 10**7; $i++);
	echo '<br />Время работы скрипта: '.(microtime(true) - $start);
	echo '<br/>';

	$time = time() + mt_rand(1, 100000);
	$time_0 = time();
	echo $time;
	echo '<br/>';
	echo $time_0;
	echo '<br/>';

	echo date('d.m.Y H:i:s', $time);
	echo '<br/>';
	echo date('d.m.Y H:i:s', $time_0);
	echo '<br/>';
	$time_1 = $time - $time_0;
	$H = floor($time_1 / 3600);
	echo "$H:".date('i:s', ($time_1 - ($H * 3600)));
	echo '<br/>';
	
	function getGM($local){
		$offset = date("Z", $local);
		return $local - $offset;
	}
	function getLM($gm, $offset){
		return $gm + $offset;
	}
	echo 'Время сервера '.date('Y.m.d H:i:s', $time_0);
	echo '<br/>';
	if ($_POST['select'] == 'UTC−6 GALT галапагосское время'){
		echo 'Ваше время '.date('Y.m.d H:i:s', getLM(getGM(time()), -3600 * 6));
	}
	if ($_POST['select'] == 'UTC+2 EET восточноевропейское время'){
		echo 'Ваше время '.date('Y.m.d H:i:s', getLM(getGM(time()), 3600 * 2));
	}
	if ($_POST['select'] == 'UTC−5 EST североамериканское восточное время'){
		echo 'Ваше время '.date('Y.m.d H:i:s', getLM(getGM(time()), -3600 * 5));
	}



?>
<form name="myform" action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
		<select name="select" size>
			<option>Выберите Ваш часовой пояс</option>
			<option>UTC−6 GALT галапагосское время</option>
			<option>UTC+2 EET восточноевропейское время</option>
			<option>UTC−5 EST североамериканское восточное время</option>
		</select>
		<input type="submit" value="Отправить">
</form>
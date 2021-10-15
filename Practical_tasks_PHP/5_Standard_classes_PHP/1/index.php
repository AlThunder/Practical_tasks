<?php
	$date = new DateTime();
	echo $date->format('d.m.Y H:i:s').'<br/>';
	$date = new DateTime('2017-05-20 12:05:50');
	echo $date->format('d.m.Y H:i:s').'<br/>';
	$date->setDate(2018, 7, 25);
	$date->setTime(23, 15, 20);
	echo $date->format('d.m.Y H:i:s').'<br/>';
	$date->setTimezone(new DateTimeZone('Europe/Moscow'));
	echo $date->getTimezone()->getOffset($date);

	$date_1 = new DateTime();
	$date_2 = new DateTime('2017-05-20 12:05:50');
	$interval = $date_1->diff($date_2);
	print_r($interval);
	echo '<br/>'.$interval->days.'<br/>';

	$interval = new DateInterval('P2Y1M5DT5H10M15S');

	$date_1->add($interval);
	echo $date_1->format('d.m.Y H:i:s').'<br/>';
	
	$date = new DateTime();
	$interval = new DateInterval('PT1H');
	$period = new DatePeriod($date, $interval, 20);
	foreach ($period as $datetime) echo $datetime->format('d.m.Y H:i:s').'<br/>';
?>
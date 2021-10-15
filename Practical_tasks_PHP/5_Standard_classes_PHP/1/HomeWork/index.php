<?php
	$date = new DateTime();
	$date_1 = new DateTime();
	echo $date->format('d.m.Y H:i:s').'<br/>';
	$date->setDate(mt_rand(2000, 2020), mt_rand(1, 12), mt_rand(1, 365));
	$date->setTime(mt_rand(1, 24), mt_rand(1, 60), mt_rand(1, 60));
	echo $date->format('d.m.Y H:i:s').'<br/>';
	$date_1->setDate(mt_rand(2000, 2020), mt_rand(1, 12), mt_rand(1, 365));
	$date_1->setTime(mt_rand(1, 24), mt_rand(1, 60), mt_rand(1, 60));
	echo $date_1->format('d.m.Y H:i:s').'<br/>';

	$i = $date->diff($date_1);
	echo "$i->days $i->h:$i->i:$i->s".'<br/>';
	$in = new DateInterval('P1D');
	$period = new DatePeriod($date, $in, $date_1);
	if ($date < $date_1) {
		$period = new DatePeriod($date, $in, $date_1);
	} else $period = new DatePeriod($date_1, $in, $date);
	foreach ($period as $datatime) echo $datatime->format('d.m.Y H:i:s').'<br/>';
	


?>
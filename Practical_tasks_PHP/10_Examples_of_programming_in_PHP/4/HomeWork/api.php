<?php
if (isset($_POST['func'])) {
	define('DB_HOST', 'localhost');
	define('DB_USER', 'mysql');
	define('DB_PASSWORD', 'mysql');
	define('DB_NAME', 'time_zone');
	$x = $_POST['func'];
		$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		$query = 'SELECT * from `secret_timezone` ORDER BY rand() LIMIT 1';
		$result = $pdo->query($query);
		$row = $result->fetch(PDO::FETCH_ASSOC);
		
		//echo json_encode($x);
		
	
	$query = "SELECT `offset` FROM `secret_timezone` WHERE `title` = '$x'";
	$r = $pdo->query($query);
	$table = $r->fetch(PDO::FETCH_ASSOC);
	//echo json_encode($table['offset']);
	$x = $table['offset'];
	
	$date = new DateTime();
   
    $grinw = $x -10800;
    if ($grinw > 0 | $grinw == 0) {
    	$interval = new DateInterval('PT'.$grinw.'S');
    	$date->add($interval);
    	$t = $date->format('d.m.Y H:i:s');
        echo json_encode($t);
    } else {
        $interval = new DateInterval('PT'.(abs($grinw)).'S');
        $date->sub($interval);
        $t = $date->format('d.m.Y H:i:s');
        echo json_encode($t);
    }

}
?>
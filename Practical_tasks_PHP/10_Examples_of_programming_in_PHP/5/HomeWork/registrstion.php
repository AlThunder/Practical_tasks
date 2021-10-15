<?php
require_once 'session.php';
require_once 'main.php';

$products = new SessionStart();
$q = new Query();
if($_POST['func']) {
	$row = $q->QueryId($_POST['func']);
	$r = $row['id'];
}
//$products->DeleteSession();
$p = $products->SessionId($row['id']);
echo json_encode($p);
?>
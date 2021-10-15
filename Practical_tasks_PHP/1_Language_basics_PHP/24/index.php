<?php
	require_once 'lib/functions.php';
	require_once 'lib/functions.php';
	$x = false;
	$y = false;
	$summa = false;
	if(isset($_POST['myform'])){
		$x = $_POST['x']?? false;
		$y = $_POST['y']?? false;
		$summa = summa($x, $y);
	}
?>
<?php if ($summa !== false) : ?><p>Сумма равна: <?=$summa?></p><?php endif ?>
<?php include_once'form.php'?>
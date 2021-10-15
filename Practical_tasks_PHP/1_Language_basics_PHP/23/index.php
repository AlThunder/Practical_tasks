<?php
	$x = false;
	$y = false;
	$summa = false;
	if(isset($_POST['myform'])){
		$x = $_POST['x']?? false;
		$y = $_POST['y']?? false;
		if ($x !== false && $y !== false && is_numeric($x) && is_numeric($y)) $summa = $x + $y;
	}
?>
<?php if ($summa !== false) : ?><p>Сумма равна: <?=$summa?></p><?php endif ?>
<form name="myform" action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
	<div>
		X: <input type="text" name="x" value="<?=$x?>" />
	</div>
	<div>
		Y: <input type="text" name="y" value="<?=$y?>" />
	</div>
	<div>
		<input type="submit" name="myform" value="Сумма" />
	</div>
</form>
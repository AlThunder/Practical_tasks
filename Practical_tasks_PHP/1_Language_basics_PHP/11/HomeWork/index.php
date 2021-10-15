<?php
	$x = false;
	$y = false;
	if(isset($_POST['myform'])){
		$x = $_POST['x']?? false;
		$y = $_POST['y']?? false;
	}
 	$sch = 0;
 	if ($x < $y) {
 		while ($x < ($y+2)){
 		$sch = $sch + $x;
 		$x += 2;
 		}
 	} elseif (($x+2) > $y){
 		while ($x >$y){
 		$sch = $sch + $y;
 		$y += 2;
 		}
 	} else {
 		$sch = 0;
 	}
	if (!isset($_POST['myform'])) echo "";
		else echo "Сумма четных чисел  между ".$_POST['x']." и ".$_POST['y']." равна $sch";

		
?>

<form name='myform' action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
	<div>
		Введите число x: <input type="text" name="x" value = "<?$x?>"/>
	</div>
	<div>
		Введите число y: <input type="text" name="y" value = "<?$y?>"/>
	</div>
	<div>
		<input type="submit" name='myform' value="Отправить" />
	</div>
</form>
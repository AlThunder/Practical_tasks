<?php
	$arr = [50.25, 20.38, 50.78, 75.75, 50];
	$arr2 =[];
	for ($i = 0; $i < count($arr); $i++ ){
		$arr2[$i] = round(($arr[$i] * 0.77), 2);
	}
	print_r($arr2);
	echo '<br/>';
	$x = false;
	$y = false;
	$r = false;
	
	if(isset($_POST['myform'])){
		$x = $_POST['x']?? false;
		$y = $_POST['y']?? false;
		if ($x > $y){
			$r = mt_rand($y, $x);
		}
		else $r = mt_rand($x, $y);
	}
	echo $r;
?>
<form name="myform" action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
	<div>
		X: <input type="textarea" name="x" value="<?=$x?>" />
	</div>
	<div>
		Y: <input type="textarea" name="y" value="<?=$y?>" />
	</div>
	<div>
		<input type="submit" name="myform" value="Случайное число от Х до  Y" />
	</div>
</form>

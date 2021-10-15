<?php
	$x = false;
	if (isset($_POST['x'])) $x = $_POST['x'];
		else {
			$x = false;
		}
 	$a = false;
 	if ($x < 0) echo 'Введите число 0 или больше 0' ;
 	 else for ($i = 0; $i <= $x; $i++ ) {
 		if ($a == 0) $a = 1;
 		else $a = $a * $i;
 	};

	if ($x < 0 || !isset($_POST['x'])) echo "";
		else echo $a;

		
?>

<form name='myform' action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
	<div>
		Введите число: <input type="text" name="x" value = "<?$x?>"/>
	</div>
	<div>
		<input type="submit" name='myform' value="Отправить" />
	</div>
</form>
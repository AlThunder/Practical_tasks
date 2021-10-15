<?php
	$age = $_POST['age'];
	if ($age < 30) echo "Вам меньше 30 лет";
	elseif ($age > 30) echo "Вам бoльше 30 лет";
	else echo "Вам 30 лет";
	
?>

<form name='myform' action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
	<div>
		Введите число: <input type="text" name="age" value = "<?$age?>"/>
	</div>
	<div>
		<input type="submit" name='myform' value="Отправить" />
	</div>
</form>
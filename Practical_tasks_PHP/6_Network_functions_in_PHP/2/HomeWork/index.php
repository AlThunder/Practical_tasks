<?php
	$color = false;
	$colorred = "<body style='background-color:red'>";
	$colorgreen = "<body style='background-color:green'>";
	$colorblue = "<body style='background-color:blue'>";

	if (isset($_COOKIE['color'])) {
		$color = $_COOKIE['color'];
	}
	if (isset($_POST['select']) == false){
		$_POST['select'] = false;
	}
	setcookie('color', $_POST['select'], time() + 3600);

	if ($_POST['select'] == false && $color == 'Красный'){
		echo $colorred;
	} elseif ($_POST['select'] == false && $color == 'Зеленый'){
		echo $colorgreen;
	} elseif ($_POST['select'] == false && $color == 'Синий'){
		echo $colorblue ;
	}
	
	if ($_POST['select'] == 'Красный'){
		echo $colorred;
	} elseif ($_POST['select'] == 'Зеленый'){
		echo $colorgreen;
	} elseif ($_POST['select'] == 'Синий'){
		echo $colorblue ;
	} 
	//setcookie('color', 1, time() + 3600);

	//echo $color;
?>
<form name="myform" action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
		<select name="select" size>
			<option>Выберите цвет</option>
			<option>Красный</option>
			<option>Зеленый</option>
			<option>Синий</option>
		</select>
		<input type="submit" value="Включить фон">
</form>
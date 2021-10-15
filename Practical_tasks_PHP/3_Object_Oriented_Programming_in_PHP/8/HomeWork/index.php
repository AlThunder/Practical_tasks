<?php
	$x_1 = false;
	$y_1 = false;
	class Point{
		public function __construct($x, $y){
			$this->x = $x;
			$this->y =$y;
		}
	}
	if((isset($_POST["save"])!= false) & ((empty($_POST['x']) == false))& ((empty($_POST['y']) == false))){
		$point = new Point($_POST['x'], $_POST['y']);
		$str = serialize($point);
		$fp = fopen('Point','w+');
		fwrite($fp, $str);
		fclose($fp);
		echo 'Сохранение прошло успешно';
	} elseif(isset($_POST["load"]) && ((is_readable('Point') !== false))){
		$str = file_get_contents('Point');
		$u = unserialize($str);		
		$x_1 = $u->x;
		$y_1 = $u->y;		
		echo 'Загрузка прошла успешно';
	} elseif ((isset($_POST["save"])!= false) & ((empty($_POST['x']) != false))& ((empty($_POST['y']) != false))){
		echo 'Координаты не введены!';
	} elseif ((isset($_POST["save"])!= false) & ((empty($_POST['x']) != false))& ((empty($_POST['y']) == false))){
		echo 'Х не введен!';
	} elseif ((isset($_POST["save"])!= false) & ((empty($_POST['x']) == false))& ((empty($_POST['y']) != false))){
		echo 'Y не введен!';
	} elseif(isset($_POST["load"]) && ((is_readable('Point') == false))){
		echo 'Координаты не были сохранены';
	}
?>
<form name = "myform" action = "<?=$_SERVER["REQUEST_URI"]?>" method = "post">
	<div>
		Введите x: <input type="textarea" name="x" value = "<?=$x_1?>">
	</div>
	<div>
		Введите y: <input type="textarea" name="y" value = "<?=$y_1?>">
	</div>
	<div>
		<input type="submit" name="save" value="Сохранить">
	</div>
	<div>
		<input type="submit" name="load" value="Загрузить">
	</div>
</form>
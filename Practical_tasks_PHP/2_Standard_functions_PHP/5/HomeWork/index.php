<?php
	$area = false;
	if((isset($_POST["save"])!= false) & (empty($_POST['area']) == false)){
		fwrite(fopen('file.txt', 'a+'), $_POST['area']);
		echo 'Сохранение прошло успешно';
	} elseif ((isset($_POST["save"])!= false) & (empty($_POST['area']) !== false)){
		echo 'Текст не введен!';
	} elseif(isset($_POST["load"]) && ((is_readable('file.txt') !== false))){
		fseek(fopen('file.txt', 'a+'), 0);
		echo fread(fopen('file.txt', 'a+'), filesize('file.txt'));
	} elseif(isset($_POST["delete"]) && ((is_readable('file.txt') !== false))){
		unlink('file.txt');
		echo 'Файл успешно удалён';
	} elseif((isset($_POST["save"])== false) & (isset($_POST["load"])== false) & (isset($_POST["delete"])== false)){
		echo false;
	} else echo 'Файл не существует';
	
	
?>
<form name = "myform" action = "<?=$_SERVER["REQUEST_URI"]?>" method = "post">
	<div>
		Введите текст и нажмите кнопку для операции: <input type="textarea" name="area">
	</div>
	<div>
		<input type="submit" name="save" value="Сохранить">
	</div>
	<div>
		<input type="submit" name="load" value="Загрузить">
	</div>
	<div>
		<input type="submit" name="delete" value="Удалить">
	</div>
</form>

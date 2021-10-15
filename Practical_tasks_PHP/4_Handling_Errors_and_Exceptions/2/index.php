<?php
	$handler = @fopen('a.txt', 'r');
	if (!$handler) echo 'Ошибка открытия файла<br/>';
	if (@$_POST['myform']) {
		echo 'Форма отправлена';
	}

?>
<form name='myform' action='index.php' method='post'>
	<div>
		<input type="submit" name="myform" value="Отправить">
	</div>
</form>
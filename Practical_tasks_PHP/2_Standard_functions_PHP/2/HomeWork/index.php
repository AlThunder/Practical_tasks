<?php
	$x = false;
	$y = false;
		
	if(isset($_POST['myform'])){
		$s_1 = $_POST['s_1']?? false;
		$s_2 = $_POST['s_2']?? false;
	}
	echo mb_strlen($s_2).'<br/>';
	if (strpos ($s_2, "$s_1")!==false) echo str_replace("$s_1", "<b>$s_1</b>", $s_2);
	else echo 'Совпадения не найдены';

?>
<form name = "myform" action = "<?=$_SERVER["REQUEST_URI"]?>" method = "post">
	<div>
		Текстовое поле: <input type="text" name="s_1">
	</div>
	<div>
		Текстовая область: <input type="textarea" name="s_2">
	</div>
	<div>
		<input type="submit" name="myform">
	</div>
</form>

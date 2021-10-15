<?php
	require_once 'lib/function.php';
	$arr2 = false;
	mb_regex_encoding('UTF-8');
	mb_internal_encoding("UTF-8");
	$arr2 = preg_split('/(?<!^)(?!$)/u', $_POST['arr2']);
	$a($arr2);	
?>
<form name= 'myform' action = "<?= $_SERVER["REQUEST_URI"]?>" method = 'post'>
	<div>
		Введите текст: <input type="textarea" name="arr2">
	</div>
</form>


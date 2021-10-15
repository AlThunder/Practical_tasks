<?php
	$t = false;
	
	mb_regex_encoding('UTF-8');
	mb_internal_encoding("UTF-8");
	$t = preg_split('/(?<!^)(?!$)/u', $_POST['t']);
	foreach ($t as $value){
		echo "$value<br/>";
	}
	
?>
<form name= 'myform' action = "<?= $_SERVER["REQUEST_URI"]?>" method = 'post'>
	<div>
		Введите текст: <input type="textarea" name="t">
	</div>
</form>


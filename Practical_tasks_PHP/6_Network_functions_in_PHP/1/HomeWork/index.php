<?php
	if(isset($_POST['select']) == false){
		$_POST['select'] = false;
	} elseif ($_POST['select'] == 'https://github.com'){
		header('Location: https://github.com');
	} elseif ($_POST['select'] == 'https://google.ru'){
		header('Location: https://google.ru');
	} elseif ($_POST['select'] == 'https://vk.com'){
		header('Location: https://vk.com');
	} 
?>
<form name="myform" action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
		<select name="select" size>
			<option>Выберите сайт</option>
			<option>https://github.com</option>
			<option>https://google.ru</option>
			<option>https://vk.com</option>
		</select>
		<input type="submit" value="Перейти на сайт">
</form>
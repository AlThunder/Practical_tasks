<?php
require_once 'session.php';
require_once 'main.php';
$q = new Query();
$s = new SessionStart();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Корзина</title>
</head>
<body>
<div><?=$q->QueryProducts(@$_SESSION['products'])?></div>
<form name="basket" method="post" action="basket.php">
	Введите Ваш телефон:<input type="text" name="phone" value="+7"><br>
	<input type="submit" name="order" value="Оформить заказ">
	<input type="submit" name="clear" value="Очистить корзину">
</form>
<div><?=$s->DeleteSession(@$_SESSION['products'])?></div>
</body>
</html>
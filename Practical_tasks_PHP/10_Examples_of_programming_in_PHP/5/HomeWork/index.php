<?php
require_once 'main.php';
session_start();
$q = new Query();
?>
<!DOCTYPE html>
<html lang='ru'>
<head>
	<title>Магазин</title>
	<meta http-equiv="Cotent-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript">
		function reply_click(clicked_id) {
		      ajax({'func': clicked_id});
		}		
		function ajax(data) {
			$.ajax({
				url: '/registrstion.php',
				type: "POST",
				data: data,
				dataType: "text",
				error: error,
				success: function(data){
              		$('#show').html(data);
              		alert('Товар успешно добавлен в корзину!');
         		}
        	});
		}
		function error() {
			alert('Ошибка при загрузке данных!');
		}		
	</script>
</head>
<body>
	<div id="show"></div>
<?=$q->queryProduct()?><br>
<form action="/basket.php">
	<button>Оформить заказ</button>
</form><br>
<form action="/admin.php">
	<button>Список заказов</button>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang='ru'>
<head>
	<title><?=$title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?=$meta_desc?>" />
	<meta name="keywords" content="<?=$meta_keywords?>" />
</head>
<body>
	<header>
		<h1>Добро пожаловать!</h1>
	</header>
	<hr />
	<div id="content"><?=$content?></div>
	<form name="myfor" action="<?=$_SERVER['REQUEST_URI']?>" method="post">
		<div>
			X: <input type="text" name="x" />
		</div>
		<div>
			Y: <input type="text" name="y" />
		</div>
		<div>
			<input type="submit" name="myform" value="Суммировать" />
		</div>
	</form>
	<hr />
	<footer>С Уважением, команда нашего сайта.</footer>
</body>
</html>
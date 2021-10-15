<?php
	$from = false;
	$to = false;
	$subject = false;
	$text = false;
	$headers = false;
	if (isset($_POST['mail'])) {
		$from = $_POST['from'];
		$to = $_POST['to'];
		$subject = $_POST['subject'];
		$text = $_POST['text'];
		$headers = 'From: <'.$from.'>\r\n';
		$headers .= 'Reply-to: <'.$from.'>\r\n';
		$headers .= 'Content-type: text/html; charset=utf-8';
		if (mail($to, $subject, $text, $headers)) echo 'Письмо отправлено';
		else echo 'Письмо не отправлено';
	}
?>
<form name="mail" action="index.php" method="post" >
	<div>
		От кого: <input type="text" name="from" value="<?=$from?>">
	</div>
	<div>
		Кому: <input type="text" name="to" value="<?=$to?>">
	</div>
	<div>
		Тема: <input type="text" name="subject" value="<?=$subject?>">
	</div>
	<div>
		Текст: <input type="text" name="text" value="<?=$text?>">
	</div>
	<div>
		<input type="submit" name="mail" value="Отправить">
	</div>
</form>
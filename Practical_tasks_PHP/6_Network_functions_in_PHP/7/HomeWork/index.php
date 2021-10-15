<?php
	use PHPMailer\PHPMailer\PHPMailer;
	require 'W:\domains\mysite.local\PHPMailer-master\src\PHPMailer.php';
	
	$from = false;
	$to = false;
	$subject = false;
	$text = false;
	if (isset($_POST['mail'])) {
		$from = $_POST['from'];
		$to = $_POST['to'];
		$subject = $_POST['subject'];
		$text = $_POST['text'];	
		try {
			$mail = new PHPmailer();
			$mail->setFrom("$from");
			$mail->addAddress("$to");
			$mail->addReplyTo("$to");
			//$mail->addAttachment('a.jpg');
			$mail->isHTML(true);
			$mail->Subject = "$subject";
	    	$mail->Body    = "$text";
	    	$mail->AltBody = "$text";

	    	$mail->send();
	    	echo 'Письмо успешно отправлено';
		} catch (Exception $e) {
	    	echo "письмо не отправлено. Mailer Error: {$mail->ErrorInfo}";
		}
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
<?php
	use PHPMailer\PHPMailer\PHPMailer;

	
	require 'W:\domains\mysite.local\PHPMailer-master\src\PHPMailer.php';
	try {
		$mail = new PHPmailer();
		$mail->setFrom('admin@mysite.local', 'Администратор');
		$mail->addAddress('joe@example.net', 'Joe User');
		$mail->addReplyTo('info@example.com', 'Information');
		$mail->addAttachment('a.jpg');
		$mail->isHTML(true);
		$mail->Subject = 'Тема';
    	$mail->Body    = 'Текст <b>письма</b>';
    	$mail->AltBody = 'Текст письма.';

    	$mail->send();
    	echo 'Письмо успешно отправлено';
	} catch (Exception $e) {
    	echo "письмо не отправлено. Mailer Error: {$mail->ErrorInfo}";
	}
?>
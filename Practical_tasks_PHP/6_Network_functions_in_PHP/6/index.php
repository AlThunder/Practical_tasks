<?php
	$to = 'abc@mail.ru';
	$subject = 'Тема';
	$text = 'Текст сообщений! <b>Hello World!</b> <br /><br />';
	$headers = 'From: <admin@mysite.local>\r\n';
	$headers .= 'Reply-to: <admin#mysite.ru>\r\n';
	$headers .= 'Content-type: text/html; charset=utf-8';
	$subject = '=?utf-8?B?'.base64_encode($subject).'?=';
	if (mail($to, $subject, $text, $headers)) echo 'Письмо отправлено!';
	else echo 'Письмо не отправлено';
	
?>
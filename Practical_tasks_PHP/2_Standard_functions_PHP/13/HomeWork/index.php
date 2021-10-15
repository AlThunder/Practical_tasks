<?php
	$reg = '/(https:\/\/www\.){1}([a-z0-9_])+\.([a-z]){2,}[\S]*([^\s,\.-])+[^https:www\.mysite\.local]+/';

	$text = "Заходите ко мне на сайт https://www.youtube.com/watch?v=T-sm9gN7TzE. Буду рад всех видеть. Так же мой второй сайт https://www.meetup.com/ru-RU/wordpress-moscow/events/275981819/. Опубликовано на сайте https://www.mysite.local.";
	$text = preg_replace($reg, 'Ссылки запрещены', $text);
	echo $text.'<br/>';
?>
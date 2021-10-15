<?php
	class Valid {

		static function validEmail($email){
			if ($email == false) throw new Exception('Данные пустые');
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) throw new Exception('Данные некорректны');
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) echo $email.'<br/>';
		}

		static function validURL($url){
			if ($url == false) throw new Exception('Данные пустые');
			if (!filter_var($url, FILTER_VALIDATE_URL)) throw new Exception('Данные некорректны');
			if (filter_var($url, FILTER_VALIDATE_URL)) echo $url.'<br/>';
		}
	}

	$email = 'abc@mail.ru';
	$valid = new Valid();
	try {
		$valid::validEmail($email);
	} catch (Exception $e) {
		echo 'Возникла ошибка: '.$e->getMessage();
	}

	$url = 'https://mysite.local';
	try {
		$valid::validURL($url);
	} catch (Exception $e) {
		echo 'Возникла ошибка: '.$e->getMessage();
	}
?>
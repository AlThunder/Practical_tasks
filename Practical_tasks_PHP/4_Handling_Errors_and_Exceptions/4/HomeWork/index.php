<?php
	
	class EmtyException extends Exception{

	}

	class LongException extends Exception{
		
	}

	class InvalidException extends Exception{
		
	}
	
	try {
		$email = ('');
		if ($email == '') throw new EmtyExcaption('E-mail не указан');
		if (mb_strlen($email) > 255 )  throw new LongException('Слишком длинный e-mail');
		if (preg_match('/[a-z0-9_]+(\.[a-z0-9_-]+)*@([0-9a-z][0-9a-z]*\.)+([a-z]){2,4}/', $email) != true) throw new InvalidException('E-mail указан неправильно');
	} catch (Exception $e) {
		echo '<br/>Возникла ошибка: '.$e->getMessage();
	}

?>
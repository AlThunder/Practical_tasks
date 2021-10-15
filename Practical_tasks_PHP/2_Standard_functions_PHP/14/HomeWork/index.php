<?php
	class Valid {
		private $email;
		public function validEmail($email) {
			
			if ($email == '') throw new Exception('E-mail не указан');
			if (mb_strlen($email) > 255 )  throw new Exception('Слишком длинный e-mail');
			if (preg_match('/[a-z0-9_]+(\.[a-z0-9_-]+)*@([0-9a-z][0-9a-z]*\.)+([a-z]){2,4}/', $email) != true) throw new Exception('E-mail указан неправильно');
			$this->email = $email;
		}

	}
	
	$user = new Valid ();
	$user->validEmail('abc@mail.ru');
	
	try {
		$user->validEmail('ssssssssssssssssssssssssssssssssssssssssssssssss');
	} catch (Exception $e) {
		echo '<br/>Возникла ошибка: '.$e->getMessage();
	}

?>
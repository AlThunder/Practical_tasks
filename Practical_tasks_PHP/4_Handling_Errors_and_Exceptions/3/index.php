<?php
	try {
		$email = 'abc@mail.ru';
		if(true) throw new Exception('My Error');
		echo 'Мы прошли проверку успешно!';
	} catch (Exception $e) {
		echo 'Возникла ошибка: '.$e->getMessage();
	}
	finally {
		echo '<br/>Тут блок finally';
	}

	class User {
		private $name;

		public function setName($name) {

			if (!$name) throw new Exception('Invalid name');
			$this->name = $name;
		}

	}

	$user = new User ();
	$user->setName('Igor');
	try {
		$user->setName('');
	} catch (Exception $e) {
		echo '<br/>Возникла ошибка: '.$e->getMessage();
	}

?>
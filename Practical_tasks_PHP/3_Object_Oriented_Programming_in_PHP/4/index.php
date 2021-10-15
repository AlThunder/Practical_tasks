<?php
	class User {

		public $name = 'User';
		public $email;

		public function __construct($name = false, $email = false){
			if ($name) $this->name = $name;
			if ($email) $this->email = $email;

		}

		public function getName(){
			return $this->name;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setName($name){
			$this->name = $name;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function __destruct(){
			echo 'Удаляем объект';
		}
	}

	$user = new User('Igor', 'abc@mail.ru');

	$user = 5;
	echo $user->name.'<br/>';
	echo $user->email.'<br/>';

	echo $user->getName().'<br/>';
	echo $user->getEmail().'<br/>';

	$user->setName('Michael').'<br/>';
	$user->setEmail('xyz@mail.ru').'<br/>';
	echo $user->getName().'<br/>';
	echo $user->getEmail().'<br/>';

	?>
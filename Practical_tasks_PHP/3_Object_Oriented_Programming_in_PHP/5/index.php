<?php
	class User {

		public $id = 0; // Доступ есть, откуда угодно
		protected $name = 'User'; // Доступ есть из этого класса и из производных классов
		private $email; // Доступ есть только из этого класса

		public function __construct($name = false, $email = false){
			if ($name) $this->name = $name;
			if ($email) $this->email = $email;
			$this->id = $this->getId();
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

		private function getId(){
			return uniqid();
		}
		public function __destruct(){
			echo 'Удаляем объект';
		}
	}

	$user = new User('Igor', 'abc@mail.ru');
	echo $user->getName();
	echo $user->id.'<br/>';

	

	?>
<?php
	class User {

		public $name = 'User';
		public $email;

	}

	$user_1 = new User ();
	echo $user_1->name.'<br/>';
	echo $user_1->email.'<br/>';
	
	$user_1->email = 'abc@mail.ru';
	echo $user_1->email,'<br/>';

	$user_2 = new User ();
	$user_2->name = 'Igor';
	$user_2->email = 'abc1@mail.ru';
	echo $user_2->name.'<br/>';
	echo $user_2->email.'<br/>';

	?>
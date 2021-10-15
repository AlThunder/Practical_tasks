<?php
	use ru\myrusakov\User;
	use ru\google\User as GoogleUser;
	require_once 'a.php';
	require_once 'b.php';

	$user = new User();
	$user->name = 'Michael';
	echo $user->name.'<br/>';

	$g_user = new GoogleUser();
	$g_user->email = 'abc@mail.ru';
	echo $g_user->email.'<br/>';

	$user = new ru\google\User();
	$user->email = '123@email.ru';
	echo $user->email.'<br/>';
?>
<?php
	//require_once 'lib/user_class.php';
	//require_once 'lib/point_class.php';

	/*spl_autoload_register(function ($classname) {
		include 'lib/'.$classname.'_class.php';
	});*/
	set_include_path(get_include_path().PATH_SEPARATOR.'lib'.PATH_SEPARATOR.'core');
	spl_autoload_extensions('_class.php');
	spl_autoload_register();
	$user = new User();
	echo $user->name;

	$point = new Point();
	echo $point->r;
?>
<?php
	$f = fopen(__FILE__, 'r');
	if(!flock($f, LOCK_EX | LOCK_NB)){
		die('Script is already running');
	}
	echo fileowner('a.txt').'<br/>';
	echo filegroup('a.txt').'<br/>';
	echo decoct(fileperms('a.txt')).'<br/>';

	chown('a.txt', 1000);
	chmod('a.txt', 0755);
	sleep(4);

?>
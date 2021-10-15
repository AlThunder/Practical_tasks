<?php
	define('COLOR', '#c00');
	echo COLOR;
	echo '<br/>';
	echo defined('COLOR');

	/* Встроенные константы в PHP*/

	echo '<br/>';
	echo __FILE__;
	echo '<br/>';
	echo PHP_VERSION;


?>
<p style ="color: <?=COLOR?>;">Hello World!</p>
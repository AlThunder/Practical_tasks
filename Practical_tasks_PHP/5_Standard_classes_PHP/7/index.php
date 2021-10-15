<?php
	class User {

		public $x = 5;

		public function getX() {
			return $x;
		}
	}
	$obj = 'DateTime'; //$obj = new DataTime()
	$obj = new $obj();
	if ($obj instanceof DateTime) echo $obj->format('Y.m.d H:i:s');

	$rc = new ReflectionClass('ReflectionClass');
	//echo $rc.'<br/><br/>';

	$rc = new ReflectionClass('User');
	echo $rc->getStartLine().'<br/>';
	echo $rc->getEndLine().'<br/>';
	$pr = $rc->getProperty('x');
	print_r($pr);
	echo '<br/>';
	$m = $rc->getMethod('getX');
	print_r($m);



?>
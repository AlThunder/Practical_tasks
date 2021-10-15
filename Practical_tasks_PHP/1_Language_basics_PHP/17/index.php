<?php
	$x = 5;
	function func($x)
	{
		$a = 8;
		$x++;
	}
	function testGlobal()
	{
		/*global $x;
		$x++;*/
		$GLOBALS['x']++;
	}
	function getCount()
	{
		static $count = 0;
		$count++;
		return $count;
	}
	func(10);
	echo $x;
	echo '<br/>';
	//echo $a;
	testGlobal ();
	echo $x;
	echo '<br/>';
	$a = 7;
	$var = 10;
	foreach ($GLOBALS as $key => $value)
	{
		if (is_array($value)) continue;
		echo "$key = $value;<br/>";
	}

	echo getCount().'<br/>';
	echo getCount().'<br/>';
	echo getCount().'<br/>';
?>

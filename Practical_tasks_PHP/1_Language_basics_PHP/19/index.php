<?php
	$hello = function($string)
	{
		echo "$string<br/>";
	};
	$hello('World');
	echo gettype($hello);
	echo '<br/>';
	function test($a, $func)
	{
		$arr = [];
		for ($i = 0; $i < $a; $i++)
		{
			$arr[] = $func($i);
		}
	return $arr;
	}

	$arr = test (10, function($i)
	{
		return $i * $i;
	});

	foreach ($arr as $v) echo $v.", ";
?>

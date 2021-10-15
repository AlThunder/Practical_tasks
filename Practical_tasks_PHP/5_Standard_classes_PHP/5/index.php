<?php
	function test($from, $to) {
		for($i = $from; $i < $to; $i++) {
			$cmd = yield $i;
			if($cmd == -1) return 'stop';
		}
		return $to - $from;
	}

	$t = test(1, 5);
	print_r($t);
	echo '<br/>';
	//foreach ($t as $v) echo $v.'; ';
	echo '<br/>';
	while ($t->valid()) {
		echo $t->current().'; ';
		if ($t->current() == 2) $t->send(-1);
		$t->next();
	}
	echo '<br/>';
	echo $t->getReturn();

?>
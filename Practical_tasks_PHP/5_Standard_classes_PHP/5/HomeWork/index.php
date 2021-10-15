<?php
	function Gen($start, $to, $step) {
		for ($i = $start; $i < $to; $i++) {
			echo $i.'; ';
			$step = yield $i;
			if ($step == 30) {
				echo 'Команда получена'; 
				$step = $i;
			}
		}
	}
	$g = Gen(10, 20, 0);
	/*$g->send(30);
	foreach ($g as $v);*/
	while ($g->valid()){
		$g->send(30);
		
		$g->current();
		$g->next();


	}
?>
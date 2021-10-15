<?php
	class Point {

		private $x;
		private $y;

		public function __construct($x, $y) {
			$this->x = $x;
			$this->y = $y;
		}

		public function getX() {
			return $this->x;
		}

		public function getY() {
			return $this->y;
		}

		public function setX($x) {
			$this->x = $x;
		}

		public function setY($y) {
			$this->y = $y;
		}
	}

	function readMe($c) {
		$rc = new ReflectionClass($c);
		echo 'Имя класса: '.$rc->getName().',<br/>';
		$prop = $rc->getProperties();
		echo 'Свойства: ';
		foreach ($prop as $key => $k) {
		foreach ($k as $v) {
				if ($v != $rc->getName()) echo $v.', ';
			}
		}
		echo '<br/>Методы: ';
		$meth = $rc->getMethods();
		foreach ($meth as $key => $k){
			foreach ($k as $value) {
				if ($value != $rc->getName() && $value != '__construct') {
					echo $value.'(), ';
				}
			}
		}	
	}
	
	readMe('Point');
	//echo $rc;
	//print_r($meth);
?>
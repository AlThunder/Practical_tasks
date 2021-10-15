<?php
	class Point {
		private $x;
		private $y;
		private $data;

		private static $counter = 0;
		public function __construct($x, $y){
			if ($x) $this->x = $x;
			if ($y) $this->y = $y;
			$this->data = $_REQUEST;
			self::$counter++;
		}

		public function getX(){
			return $this->x;
		}
		public function getY(){
			return $this->y;
		}
		public function setX($x){
			$this->x = $x;
		}
		public function setY($y){
			$this->y = $y;
		}
		public static function getCounter(){
			return self::$counter;
		}
		
		public function __toString(){
			$s = '';
			$s = "Точка с координатами ($this->x, $this->y)";
			return $s;
		}

		public function __get($name){
			if (($name == "z") != false) echo 'Класс Point работает только в двумерном пространстве<br/>';
		}
		public function __set($name, $value){
			if (($name == "z") != false) echo 'Класс Point работает только в двумерном пространстве<br/>';
		}
		public function __call($method, $args){
			if (($method == "setZ") != false) echo 'Класс Point работает только в двумерном пространстве<br/>';
		}
		
	}

	$point = new Point(5, 3);
	//echo $point->x.'<br/>';
	//echo $point->y.'<br/>';
	$point->setX(10);
	$point->setY(6);
	echo $point->getX().'<br/>';
	echo $point->getY().'<br/>';
	$point_1 = new Point(12, 7);
	$point_2 = new Point(42, 87);
	echo Point::getCounter().'<br/>';
	
	echo $point.'<br/>';
	echo $point_1.'<br/>';
	echo $point_2.'<br/>';
	$point->z;
	$point->z = 5;
	$point->setZ();

	$point = new Point(45, 50);
	$p = clone $point;
	echo $point->getX().'<br/>';
	echo $point->getY().'<br/>';
	$point->setX(100);
	$point->setY(60);
	echo $point->getX().'<br/>';
	echo $point->getY().'<br/>';
	echo $p->getX().'<br/>';
	echo $p->getY().'<br/>';

	?>
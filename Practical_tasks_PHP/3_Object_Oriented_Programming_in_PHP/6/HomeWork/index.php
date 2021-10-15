<?php
	class Point {

		private $x;
		private $y;
		private static $counter = 0;
		public function __construct($x, $y){
			if ($x) $this->x = $x;
			if ($y) $this->y = $y;
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
	echo Point::getCounter();


	?>
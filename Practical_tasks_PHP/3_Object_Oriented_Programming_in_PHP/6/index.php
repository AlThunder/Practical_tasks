<?php
	class Math{

		public const PI = 3.1415926;
		private static $counter = 0;

		public static function sin($x){
			self::$counter++;
			return sin($x);
		}

		public static function pi2(){
			self::$counter++;
			return self::PI ** 2;
		}

		public static function getCounter(){
			return self::$counter;
		}
	}

	echo Math::sin(5).'<br/>';
	echo Math::pi2().'<br/>';
	echo Math::getCounter().'<br/>';
	echo Math::PI;

?>
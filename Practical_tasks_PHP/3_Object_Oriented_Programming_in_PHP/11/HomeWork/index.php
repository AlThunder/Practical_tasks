<?php
	trait CanMove {

		public function move(){
			echo 'Движение автомобиля'.'<br/>';
		}
	}

	trait CanFly {

		public function fly(){
			echo 'Полёт самолета';
		}

	}

	class Car  {

		use CanMove;

	}

	class Aircraft {

		use CanFly;
	}

	$car = new Car();
	$car->move();
	$aircraft = new Aircraft();
	$aircraft->fly();
?>
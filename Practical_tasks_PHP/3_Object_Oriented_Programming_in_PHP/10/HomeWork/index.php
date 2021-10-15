<?php
	interface CanMove {

		public function move();
	}

	interface CanFly {

		public function fly();

	}

	class Car implements CanMove {

		public function move(){
			echo 'Движение автомобиля'.'<br/>';
		}

	}

	class Aircraft implements CanFly {

		public function fly(){
			echo 'Полёт самолета';
		}
	}

	$car = new Car();
	$car->move();
	$aircraft = new Aircraft();
	$aircraft->fly();
?>
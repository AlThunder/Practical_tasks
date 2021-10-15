<?php
class Summ {

	private $x;
	private $y;
	private $summ;

	public function __construct($x, $y) {
		$this->x = $x;
		$this->y = $y;
	}

	public function outPut() {
		if (isset($_POST['myform'])) {
			if (($this->x !== false) && ($this->y !== false) && (is_numeric($this->x)) && (is_numeric($this->y))){ 
				$this->summ = $this->x + $this->y;
				if ($this->summ !== false) {
					return 'Сумма равна: '.$this->summ;
				} else return 'Данные введены не верно!';
			} else return 'Данные введены не верно!';
		} else return 'Введите числа';
	}
}
?>
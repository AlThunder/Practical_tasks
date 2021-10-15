<?php
	class Test
	{
		public $x = 5;
		public $y = 8;
		private $z = 10;
		protected $pr = -5;

	}

	class MyArray implements Iterator
	{
		private $arr = ['Name' => 'Michael', 'age' => '26', 'bd' => '11.07.1990'];

		public function rewind() {
			reset($this->arr);
		}

		public function current() {
			return current($this->arr);
		}

		public function key () {
			return key($this->arr);
		}

		public function next () {
			return next($this->arr);
		}

		public function valid () {
			$key = key($this->arr);
			return ($key !== null && $key !== false);
		}
	}

	$test = new Test();

	foreach ($test as $k => $v) echo "$k = $v; ";
	echo '<br/>';

	$arr = new MyArray();

	foreach ($arr as $k => $v) echo "$k = $v; ";
	echo '<br/>';

	$dir = new DirectoryIterator('W:\modules\conemu');
	foreach ($dir as $file) {
		echo $file->getFilename();
		if ($file->isFile()) echo $file->getSize().' байт';
		echo '<br/>';
	}
?>
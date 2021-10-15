<?php
	class MyArray implements Iterator {
		private $index;
		private $list = [3, 6, 10, 56];

		public function rewind() {
			$this->index = 0;
		}

		public function current() {
			return $this->list[$this->index];
		}

		public function key() {
			return $this->index;
		}

		public function next() {
			return $this->index++;
		}

		public function valid() {
			$key = $this->index;
			return ($key < count($this->list));
		}
	}

	$arr = new MyArray();

	foreach ($arr as $k => $v) echo "$k = $v; ";
	echo '<br/>';
?>
<?php
	class MyArray implements Iterator, ArrayAccess {
		private $index;
		private $list = [3, 6, 10, 56];
		
		public function offsetExists($offset) {
			return isset($this->list[$offset]);
		}

		public function offsetGet($offset) {
			return $this->list[$offset];
		}

		public function offsetSet($offset, $value) {
			$this->list[$offset] = $value;
		}

		public function offsetUnset($offset) {
			unset($this->list[$offset]);
		}

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

	$arr[4] = 'Michael';
	$arr[5] = 26;
	foreach ($arr as $k => $v) echo "$k = $v; ";
	echo '<br/>';
?>
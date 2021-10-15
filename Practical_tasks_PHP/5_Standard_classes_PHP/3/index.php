<?php
	class MyArray implements ArrayAccess
	{
		private $arr = [];

		public function offsetExists($offset) {
			return isset($this->arr[$offset]);
		}

		public function offsetGet($offset) {
			return $this->arr[$offset];
		}

		public function offsetSet($offset, $value) {
			$this->arr[$offset] = $value;
		}

		public function offsetUnset($offset) {
			unset($this->arr[$offset]);
		}
	}

	$a = new MyArray();
	$a['Name'] = 'Michael';
	$a['Age'] = 26;
	echo $a['Name'].' - '.$a['Age'].'<br/>';
	echo isset($a['Name']).'<br/>';
	unset($a['Name']);
	echo isset($a['Name']).'<br/>';
	

?>
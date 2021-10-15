<?php
	try {
		throw new Exception('Error message', 1);
	} catch (Exception $e) {
		echo $e->getMessage().'<br/>';
		echo $e->getCode().'<br/>';
		echo $e->getFile().'<br/>';
		echo $e->getLine().'<br/>';
		print_r($e->getTrace());
		echo '<br/>';
		echo $e->getTraceAsString().'<br/>';
	}

	function test1() {
		throw new Exception("Error message", 1);
		
	}

	function test2() {
		test1();
	}

	try {
		test2();
	} catch (Exception $e){
		print_r($e->getTrace());
		echo '<br/>';
	}

	class FileException extends Exception{

		
	}

	class NameException extends Exception{

		public function __construct(int $code) {
			parent::__construct('', $code);
		}
	}

	try {
		$name = '';
		$file = 'a.txt';
		if (!$name) throw new NameException(1);
		if (!file_exists($file)) throw new FileException('Файл не существует', 1);
	} catch (Exception $e){
		if ($e instanceof NameException) echo 'Это исключение NameException';
		elseif ($e instanceof FileException) echo 'Это исключение FileException';
		echo $e->getCode();
	}
?>
<?php
session_start();
class SessionStart {

	public function SessionId($x) {		
		if (isset($_SESSION['products'])) {
			$_SESSION['products'] .= ", ".$x;
			return $_SESSION['products'];
		} else {
			$_SESSION['products'] = $x;
			return $_SESSION['products'];
		}
	}

	public function DeleteSession() {
		if (isset($_POST['clear'])) {
			unset($_SESSION['products']);
		}		
	}
}
?>
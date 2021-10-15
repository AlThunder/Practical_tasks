<?php
@session_start();
$error = false;
if (isset($_POST['auth'])) {
	$_SESSION['login'] = $_POST['login_au'];
	$_SESSION['password'] = $_POST['pass_au'];
	$error = true;
}
if (isset($_GET['f']) && $_GET['f'] == 'logout') {
	unset($_SESSION['login']);
	unset($_SESSION['password']);
}
$query = 'SELECT `login`, `password`, `name` FROM `new_secret_users`';
$r = $pdo->query($query);
$table = $r->fetchAll(PDO::FETCH_ASSOC);
$array = [];
$i = 2;
$auth = false;
	if (isset($_POST['auth'])) {
		$login_au = htmlspecialchars($_POST['login_au']);
		$pass_au = htmlspecialchars($_POST['pass_au']);
		if (($pass_au != false) & ($pass_au != false)) {
			$query = 'SELECT `login`, `password` FROM `new_secret_users`';
			$r = $pdo->query($query);
			$table = $r->fetchAll(PDO::FETCH_ASSOC);
			$array = [];
			$i = 2;
			foreach ($table as $key ) {
				foreach ($key as $k => $value){
					if(is_int($i/2)){
						$x = $value;
					}
					if(!is_int($i/2)) {
						$array[$x] = $value ;
						if ((@$_POST['login_au'] == $x) & (@$_POST['pass_au'] == $value)) {
							$login_true = @$_POST['login_au'];
							$password_true = @$_POST['pass_au'];
							$query = 'SELECT `login`, `name` FROM `new_secret_users`';
							$r = $pdo->query($query);
							$table = $r->fetchAll(PDO::FETCH_ASSOC);
							$arr = [];
							$ii = 2;
							foreach ($table as $key ) {
								foreach ($key as $k => $v){
									if (is_int($ii/2)){
										$xx = $v;
									}
									if (!is_int($ii/2)) {
										$arr[$xx] = $v ;
										if ($x == $xx) {
											$login = $v;
										}
									}
								$ii++;
								}
							}
						} 
					}
				$i++;
				}	
			}
			/*try {
				$query = "INSERT INTO `new_secret_users` (`name`, `login`, `password`) 
				VALUES (?, ?, ?)";
				$query = $pdo->prepare($query);
				$result = $query->execute([$name_reg, $login_reg, $pass_reg]);	
			}  catch (PDOException $e) {
				echo 'Ошибка в запросе:'.$e->getMessage();
			}*/
		} else echo 'Одно из полей не заполнено!';
	}
	$iss = isset($_SESSION['login']) && isset($_SESSION['password']);
	if ($iss && $_SESSION['login'] === @$login_true && $_SESSION['password'] === @$password_true) {
		$auth = true;
		$error = false;
	}
	
	/*if (isset($_POST['auth'])) {
		$_SESSION['login'] = $_POST['login_au'];
		$_SESSION['password'] = md5($_POST['pass_au']);
		$error = true;
	}
	if (isset($_GET['f']) && $_GET['f'] == 'logout') {
		unset($_SESSION['login']);
		unset($_SESSION['password']);
	}
	$login = 'admin';
	$password = '202cb962ac59075b964b07152d234b70';
	$auth = false;
	$iss = isset($_SESSION['login']) && isset($_SESSION['password']);
	if($iss && $_SESSION['login'] === $login && $_SESSION['password'] === $password ) {
		$auth = true;
		$error = false;
	}*/
?>
<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'mysql');
define('DB_PASSWORD', 'mysql');
define('DB_NAME', 'products');
class Query {

	private $pdo;

	public function __construct (){
		$this->pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	}

	public function queryProduct() {
		try {
			$query = "SELECT `id` FROM `secret_products`";
			$result = $this->pdo->query($query);
			$row = $result->fetchall(PDO::FETCH_ASSOC);
			foreach ($row as $k) {
				foreach ($k as $key => $id) {
					$q = "SELECT * FROM `secret_products` WHERE `id` = $id";
					$res = $this->pdo->query($q);
					$r = $res->fetchall(PDO::FETCH_ASSOC);
					foreach ($r as $keyy) {
						foreach ($keyy as $kk => $value) {
							if ($kk == 'name') {
								$string = '<div>Название телефона: '.$value.', ';
								$name_prod = $value;
							} 
							if ($kk == 'price') {
								$string .= 'Цена - '.$value.' руб. </div>';
								$string .= "<input type='button' onClick='reply_click(this.name)' name='$name_prod' value='Добавить в корзину'><br><br>\r\n";
								echo $string;
							}		
						}
					}
				}
			}
		} catch(PDOException $e) {
			echo 'Ошибка: '.$e->getMessage();
		}
	}

	public function QueryId ($product) {
		$query = "SELECT `id` FROM `secret_products` WHERE `name` = '$product'";
		$result = $this->pdo->query($query);
		$row = $result->fetch(PDO::FETCH_ASSOC);
		return $row;
	}

	public function QueryProducts ($products) {
		if (isset($products)) {
		
		preg_match_all("/[0-9]+/", $products, $matches);
		foreach ($matches as $k) {
			$summ = false;
			foreach ($k as $key => $value){
				$query = "SELECT `name`, `price` FROM `secret_products` WHERE `id` = '$value'";
				$result = $this->pdo->query($query);
				$row = $result->fetchall(PDO::FETCH_ASSOC);
				echo $row[0]['name'].' '.$row[0]['price'].' руб.<br/>';
				$summ += $row[0]['price'];
			}
		}}
		echo '<br/>Обшая сумма заказа: '.@$summ.' руб.<br/>';
		if ((isset($_POST['phone'])) && (isset($_POST['order']))) {
			$phone = $_POST['phone'];
			try {
				$query = "INSERT INTO `secret_orders` (`id_products`, `suuma_order`, `phone`)
				VALUES ('$products', '$summ', '$phone')";
				$result = $this->pdo->exec($query);
				echo 'Заказ успешно оформлен!';
			} catch(PDOException $e) {
				echo 'Ошибка: '.$e->getMessage();
			}
		} else 'ошибка';
	}

	public function QueryCount() {
		$query = "SELECT COUNT(`id`) FROM `secret_orders`";
		$result = $this->pdo->query($query);
		$row = $result->fetchColumn();
		return $row;
	}

	public function QueryOrder($x, $y) {
		$query = "SELECT `$y` FROM `secret_orders`";
		$result = $this->pdo->query($query);
		$row = $result->fetchall(PDO::FETCH_ASSOC);
		return $row["$x"]["$y"];
	}

	public function QueryOrderX($x, $y) {
		$query = "SELECT `$y` FROM `secret_orders` WHERE `id` = '$x'";
		$result = $this->pdo->query($query);
		$row = $result->fetchall(PDO::FETCH_ASSOC);
		return $row[0]["$y"];
	}

	public function QueryNamesOrder($id_products) {
		$string = false;
		preg_match_all("/[0-9]+/", $id_products, $matches);
		foreach ($matches as $k) {
			foreach ($k as $key => $value){
				$query = "SELECT `name` FROM `secret_products` WHERE `id` = '$value'";
				$result = $this->pdo->query($query);
				$row = $result->fetchall(PDO::FETCH_ASSOC);
				$string .= $row[0]['name'].', ';	
			}
		}
		return $string;
	}
}
?>
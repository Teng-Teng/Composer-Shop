<?php 
require_once('item.php');

class DBConnection {
	private $conn;

	// Return a connection instance
	private function getConnInstance() {
		if(!$this->conn) {
			$this->conn = new PDO('mysql:host=localhost;dbname=Shop;charset=utf8mb4', 'root', 'root');
		}

		return $this->conn;
	}

    // get all items, return an array --> version1
	public function getAllItemsReturnArr() {

		$sql = "SELECT * FROM Item";
		$stmt = $this->getConnInstance()->query($sql);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	// get all items, return object (item class) --> version2
	public function getAllItemsReturnObj() {
		$this->getConnInstance();

		$sql = "SELECT * FROM Item";
		$stmt = $this->conn->query($sql);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$items = array();
		foreach($result as $row) {
			$item = new Item();
			$items[] = $item->arrayAdapter($row);
		}

		return $items;
	}



}




?>
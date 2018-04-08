<?php 

class Item {
	private $id;
	private $name;
	private $price;
	private $img_url;
	private $description;

	function __construct($name = "", $price = 0, $img_url = "", $description = "") {
		$this->name = $name;
		$this->price = $price;
		$this->img_url = $img_url;
		$this->description = $description;
	}

	// DB data --> item data
	public function arrayAdapter($row) {
		$this->id = $row['id'];
		$this->name = $row['name'];
		$this->price = $row['price'];
		$this->img_url = $row['image_url'];
		$this->description = $row['description'];

		return $this;
	}

	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		return $this;
	}

	public function getImgUrl() {
		return $this->img_url;
	}

	public function setImgUrl($url) {
		$this->url = $url;
		return $this;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}


}



?>
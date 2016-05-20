<?php

class Produto {

	public $name;
	public $description;
	public $value;
	public $stock;

	/*public function __construct($name, $description, $value, $stock) {
		$this->name = $name;
		$this->description = $description;
		$this->value = $value;
		$this->stock = $stock;	
	}*/

	public function lowStock() {
		$this->stock = $this->stock - 1;
	}
}
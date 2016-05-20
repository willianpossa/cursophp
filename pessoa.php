<?php

//Classes
class Pessoa {

	public $name;
	public $age;
	public $address;


	public function __construct($name, $age, $address) {
		$this->name = $name;
		$this->age = $age;
		$this->address = $address;
	}
	public function run($km) {
		echo $this->name." Esta correndo ";
		
		for($i = 0; $km > $i; $i++) {
			echo ". ";
		}

		echo $this->name." Acabou de Correr";
	}
	public function age() {
		echo $this->name." Tem $this->age Anos";
	}
	public function live() {
		echo $this->name." Mora em Sao Paulo, na $this->address";
	}
}
/*Printando os Objetos
	echo $pessoa1->run(87);

		echo "$var <br>";
		echo "$var <br>";

	echo $pessoa1->age();

		echo "$var <br>";
		echo "$var <br>";

	echo $pessoa1->live();

		echo "$var <br>";
		echo "$var <br>";

	echo $pessoa2->run(30);

		echo "$var <br>";
		echo "$var <br>";

	echo $pessoa2->age();

		echo "$var <br>";
		echo "$var <br>";

	echo $pessoa2->live();

		echo "$var <br>";
		echo "$var <br>";

	echo $pessoa3->run(102);

		echo "$var <br>";
		echo "$var <br>";

	echo $pessoa3->age();

		echo "$var <br>";
		echo "$var <br>";

	echo $pessoa3->live();

*/
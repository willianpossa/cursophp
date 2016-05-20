<?php

include ('TenisInterface.php');

class TenisAdidas extends Produto implements TenisInterface {

	public function getColor() {
		return "Vermelho";
	}

	public function getSize() {
		return 42;
	}

}
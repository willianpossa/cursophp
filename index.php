<?php 
/*
require_once 'pessoa.php';

	$pessoa1 = new Pessoa("Willian", 19, "Rua Acacio Vasconcelos");

	$pessoa2 = new Pessoa("Thayany", 23, "Rua J");

	$pessoa3 = new Pessoa("Antonio", 20, "Avenida Itabuna");

	echo $pessoa1->run(50);

		echo "$var <br>";
		echo "$var <br>";

	echo $pessoa1->live();

		echo "$var <br>";
		echo "$var <br>";

	echo $pessoa1->age();

		echo "$var <br>";
		echo "$var <br>";

	echo $pessoa2->run(37);

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

*/

require_once 'produto.php';
require_once 'tenis.php';
require_once 'TenisAdidas.php';
require_once 'sapatenis.php';

	$tenis = new TenisAdidas();
	$tenis->getColor();
	$tenis->getSize();

	$tenis1 = new Sapatenis();
	$tenis1->getColor();
	$tenis1->getSize();

	echo $tenis->getColor();

		echo "<br>";
		echo "<br>";

	echo $tenis->getSize();
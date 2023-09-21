<?php

require '../../../../autoload.php';

$bolsa = [new Gato, new Perro];

foreach ($bolsa as $animal) {
	$animal->hacerSonido();
}

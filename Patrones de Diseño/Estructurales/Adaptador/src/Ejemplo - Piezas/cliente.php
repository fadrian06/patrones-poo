<?php

require '../../../../../autoload.php';

use Adaptadores\AdaptadorPiezaCuadrada;
use Piezas\PiezaCuadrada;
use Piezas\PiezaRedonda;

$hoyo = new HoyoRedondo(5);
$piezaRedonda = new PiezaRedonda(5);
printf(
	"hoyo->encajar(piezaRedonda) -> %s\n",
	$hoyo->encajar($piezaRedonda) ? 'TRUE' : 'FALSE'
);

$piezaCuadradaPequeña = new PiezaCuadrada(5);
$piezaCuadradaGrande = new PiezaCuadrada(10);
// $hoyo->encajar($piezaCuadradaPequeña); // NO COMPILA (tipos incompatibles)

$adaptadorPiezaCuadradaPequeña = new AdaptadorPiezaCuadrada(
	$piezaCuadradaPequeña
);
$adaptadorPiezaCuadradaGrande = new AdaptadorPiezaCuadrada(
	$piezaCuadradaGrande
);

printf(
	"hoyo->encajar(adaptadorPiezaCuadradaPequeña) -> %s\n",
	$hoyo->encajar($adaptadorPiezaCuadradaPequeña) ? 'TRUE' : 'FALSE'
);
printf(
	"hoyo->encajar(adaptadorPiezaCuadradaGrande) -> %s\n",
	$hoyo->encajar($adaptadorPiezaCuadradaGrande) ? 'TRUE' : 'FALSE'
);

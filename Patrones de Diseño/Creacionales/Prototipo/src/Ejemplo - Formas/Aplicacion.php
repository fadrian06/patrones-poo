<?php

require '../../../../../autoload.php';

use Formas\Circulo;
use Formas\Forma;
use Formas\Rectangulo;

class Aplicacion {
	function esUnPrototipo(Forma $forma): bool {
		return $forma == $forma->clonar();
	}
}

$rectangulo = new Rectangulo(rand(), rand(), 'negro', rand(), rand());
$circulo = new Circulo(rand(), rand(), $rectangulo->color(), rand());
$aplicacion = new Aplicacion;
var_dump($aplicacion->esUnPrototipo($rectangulo));
var_dump($aplicacion->esUnPrototipo($circulo));

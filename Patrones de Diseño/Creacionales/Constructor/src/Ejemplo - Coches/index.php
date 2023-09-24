<?php

require '../../../../../autoload.php';

use Coches\ConstructorDeCoches;
use Coches\ConstructorDeManualesDeCoche;
use Coches\Director;

class Aplicacion {
	function hacerCoche() {
		$director = new Director;

		$builder = new ConstructorDeCoches;
		$director->construirCocheDeportivo($builder);
		$coche = $builder->obtenerResultado();

		$builder = new ConstructorDeManualesDeCoche;
		$director->construirCocheDeportivo($builder);
		$manual = $builder->obtenerResultado();

		print_r(compact('coche', 'manual'));
	}
}

(new Aplicacion)->hacerCoche();

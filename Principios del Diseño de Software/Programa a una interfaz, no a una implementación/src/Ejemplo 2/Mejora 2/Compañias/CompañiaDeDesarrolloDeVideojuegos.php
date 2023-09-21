<?php

namespace Compañias;

use Empleados\Artista;
use Empleados\Diseñador;

class CompañiaDeDesarrolloDeVideojuegos extends Compañia {
	function obtenerEmpleados(): array {
		return [
			new Diseñador,
			new Artista
		];
	}
}

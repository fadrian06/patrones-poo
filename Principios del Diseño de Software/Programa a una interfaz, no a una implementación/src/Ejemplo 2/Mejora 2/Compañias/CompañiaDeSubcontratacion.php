<?php

namespace Compañias;

use Empleados\Probador;
use Empleados\Programador;

class CompañiaDeSubcontratacion extends Compañia {
	function obtenerEmpleados(): array {
		return [
			new Programador,
			new Probador
		];
	}
}

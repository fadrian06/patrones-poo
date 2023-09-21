<?php

use Empleados\Diseñador;
use Empleados\Probador;
use Empleados\Programador;

class Compañia {
	function crearSoftware() {
		$empleados = [
			new Diseñador,
			new Programador,
			new Probador
		];

		foreach ($empleados as $empleado) {
			$empleado->trabajar();
		}
	}
}

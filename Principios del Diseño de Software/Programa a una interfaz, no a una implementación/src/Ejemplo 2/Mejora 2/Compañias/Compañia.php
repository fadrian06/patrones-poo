<?php

namespace Compañias;

use Empleados\Empleado;

abstract class Compañia {
	/** @return Empleado[] */
	abstract function obtenerEmpleados(): array;

	function crearSoftware() {
		$empleados = $this->obtenerEmpleados();

		foreach ($empleados as $empleado) {
			$empleado->trabajar();
		}
	}
}

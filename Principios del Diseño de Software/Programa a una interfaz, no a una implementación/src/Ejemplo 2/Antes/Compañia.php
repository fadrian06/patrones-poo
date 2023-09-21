<?php

use Empleados\Diseñador;
use Empleados\Probador;
use Empleados\Programador;

class Compañia {
	function crearSoftware() {
		$diseñador = new Diseñador;
		$programador = new Programador;
		$probador = new Probador;

		$diseñador->diseñarArquitectura();
		$programador->escribirCodigo();
		$probador->probarSoftware();
	}
}

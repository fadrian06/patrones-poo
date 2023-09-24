<?php

namespace Coches;

use Motores\Motor;
use Navegacion\ComputadoraDeNavegacion;
use Posicionamiento\GPS;

class ConstructorDeManualesDeCoche implements Constructor {
	private Manual $manual;

	function __construct() {
		$this->reiniciar();
	}

	function reiniciar(): void {
		$this->manual = new Manual;
	}

	function asignarAsientos(int $numero): void {
		$this->manual->asientos = $numero;
	}

	function asignarMotor(Motor $motor): void {
		$this->manual->motor = $motor;
	}

	function asignarComputadoraDeNavegacion(ComputadoraDeNavegacion $computadora): void {
		$this->manual->computadoraDeNavegacion = $computadora;
	}

	function asignarGPS(GPS $gps): void {
		$this->manual->gps = $gps;
	}

	function obtenerResultado(): Manual {
		return $this->manual;
	}
}

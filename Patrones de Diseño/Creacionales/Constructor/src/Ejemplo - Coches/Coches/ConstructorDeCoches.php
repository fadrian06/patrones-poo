<?php

namespace Coches;

use Motores\Motor;
use Navegacion\ComputadoraDeNavegacion;
use Posicionamiento\GPS;

class ConstructorDeCoches implements Constructor {
	private Coche $coche;

	function __construct() {
		$this->reiniciar();
	}

	function reiniciar(): void {
		$this->coche = new Coche;
	}

	function asignarAsientos(int $numero): void {
		$this->coche->asientos = $numero;
	}

	function asignarMotor(Motor $motor): void {
		$this->coche->motor = $motor;
	}

	function asignarComputadoraDeNavegacion(ComputadoraDeNavegacion $computadora): void {
		$this->coche->computadoraDeNavegacion = $computadora;
	}

	function asignarGPS(GPS $gps): void {
		$this->coche->gps = $gps;
	}

	function obtenerResultado(): Coche {
		$producto = $this->coche;
		$this->reiniciar();
		return $producto;
	}
}

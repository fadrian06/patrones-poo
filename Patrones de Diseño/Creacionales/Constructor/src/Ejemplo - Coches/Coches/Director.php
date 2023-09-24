<?php

namespace Coches;

use Motores\MotorDeportivo;
use Motores\MotorSUV;
use Navegacion\ComputadoraDeNavegacion;
use Posicionamiento\GPS;

class Director {
	function construirCocheDeportivo(Constructor $constructor) {
		$constructor->reiniciar();
		$constructor->asignarAsientos(2);
		$constructor->asignarMotor(new MotorDeportivo);
		$constructor->asignarComputadoraDeNavegacion(new ComputadoraDeNavegacion);
		$constructor->asignarGPS(new GPS);
	}

	function construirSUV(Constructor $constructor) {
		$constructor->reiniciar();
		$constructor->asignarAsientos(5);
		$constructor->asignarMotor(new MotorSUV);
	}
}

<?php

namespace Coches;

use Motores\Motor;
use Navegacion\ComputadoraDeNavegacion;
use Posicionamiento\GPS;

interface Constructor {
	function reiniciar(): void;
	function asignarAsientos(int $numero): void;
	function asignarMotor(Motor $motor): void;
	function asignarComputadoraDeNavegacion(ComputadoraDeNavegacion $computadora): void;
	function asignarGPS(GPS $gps): void;
}

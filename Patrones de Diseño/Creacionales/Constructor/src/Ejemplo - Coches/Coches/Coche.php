<?php

namespace Coches;

use Motores\Motor;
use Navegacion\ComputadoraDeNavegacion;
use Posicionamiento\GPS;

class Coche {
	public int $asientos;
	public Motor $motor;
	public ComputadoraDeNavegacion $computadoraDeNavegacion;
	public GPS $gps;
}

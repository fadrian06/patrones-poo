<?php

namespace Adaptadores;

use Piezas\PiezaCuadrada;
use Piezas\PiezaRedonda;

class AdaptadorPiezaCuadrada extends PiezaRedonda {
	function __construct(private PiezaCuadrada $pieza) {}

	function obtenerRadio(): int {
		return floor($this->pieza->obtenerAncho() * sqrt(2) / 2);
	}
}

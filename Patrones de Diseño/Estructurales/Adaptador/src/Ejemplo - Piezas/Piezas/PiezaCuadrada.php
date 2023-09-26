<?php

namespace Piezas;

class PiezaCuadrada {
	function __construct(private int $ancho) {}

	function obtenerAncho(): int {
		return $this->ancho;
	}
}

<?php

use Piezas\PiezaRedonda;

class HoyoRedondo {
	function __construct(private int $radio) {}

	function obtenerRadio(): int {
		return $this->radio;
	}

	function encajar(PiezaRedonda $pieza): bool {
		return $this->radio >= $pieza->obtenerRadio();
	}
}

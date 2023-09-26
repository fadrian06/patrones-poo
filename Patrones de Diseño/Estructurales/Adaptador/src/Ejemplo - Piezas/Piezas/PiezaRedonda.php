<?php

namespace Piezas;

class PiezaRedonda {
	function __construct(private int $radio) {}

	function obtenerRadio(): int {
		return $this->radio;
	}
}

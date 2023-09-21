<?php

namespace Composicion;

use Composicion\Conductores\Conductor;
use Composicion\Motores\Motor;

class Transporte {
	private Motor $motor;

	/** @param class-string<Motor> $motor */
	function __construct(string $motor, private Conductor $conductor) {
		if (is_a($motor, Motor::class, true)) {
			$this->motor = new $motor;
		}

		printf(
			"Transporte creado con motor: %s, conductor: %s\n",
			$this->motor::class,
			$this->conductor::class
		);
	}

	function entregar($destino, $carga) {}
}

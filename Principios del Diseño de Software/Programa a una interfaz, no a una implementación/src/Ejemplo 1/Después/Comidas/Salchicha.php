<?php

namespace Comidas;

use Comidas\Comida;

class Salchicha implements Comida {
	function obtenerNutricion(): int {
		return rand(1, 100);
	}

	function obtenerColor() {}
	function obtenerExpiracion() {}
}

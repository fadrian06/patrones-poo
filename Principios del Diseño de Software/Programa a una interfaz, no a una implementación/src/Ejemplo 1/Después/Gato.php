<?php

use Comidas\Comida;

class Gato {
	private int $energia = 100;

	function comer(Comida $comida) {
		$this->energia += $comida->obtenerNutricion();
	}
}

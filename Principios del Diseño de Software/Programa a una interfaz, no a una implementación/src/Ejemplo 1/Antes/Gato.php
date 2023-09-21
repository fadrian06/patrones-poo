<?php

class Gato {
	private int $energia = 100;

	function comer(Salchicha $salchicha) {
		$this->energia += $salchicha->obtenerNutricion();
	}
}

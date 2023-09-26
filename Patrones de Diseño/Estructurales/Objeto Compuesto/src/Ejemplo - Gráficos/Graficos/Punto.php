<?php

namespace Graficos;

class Punto implements Grafico {
	function __construct(protected int $x, protected int $y) {}

	function mover(int $x, int $y) {
		$this->x += $x;
		$this->y += $y;
	}

	function dibujar() {
		echo 'Dibujando ' . __CLASS__;
	}
}

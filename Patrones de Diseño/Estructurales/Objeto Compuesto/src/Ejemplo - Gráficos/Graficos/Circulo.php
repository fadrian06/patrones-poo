<?php

namespace Graficos;

class Circulo extends Punto {
	function __construct(int $x, int $y, private int $radio) {
		parent::__construct($x, $y);
	}

	function dibujar() {
		printf('Dibujando %s', __CLASS__);
	}
}

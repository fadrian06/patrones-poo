<?php

namespace Graficos;

interface Grafico {
	function mover(int $x, int $y);
	function dibujar();
}

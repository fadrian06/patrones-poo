<?php

namespace Graficos;

class GraficoCompuesto implements Grafico {
	/** @var Grafico[] */
	private array $graficos = [];

	function añadir(Grafico $grafico) {
		$this->graficos[] = $grafico;
	}

	function eliminar(Grafico $grafico) {
		$filtro = fn (Grafico $g) => $g != $grafico;

		$this->graficos = array_filter($this->graficos, $filtro);
	}

	function mover(int $x, int $y) {
		foreach ($this->graficos as $grafico) {
			$grafico->mover($x, $y);
		}
	}

	function dibujar() {
		printf("Dibujando %s\n", __CLASS__);

		foreach ($this->graficos as $grafico) {
			$grafico->dibujar();
			echo "\n";
		}
	}
}

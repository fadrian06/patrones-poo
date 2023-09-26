<?php

use Graficos\Circulo;
use Graficos\Grafico;
use Graficos\GraficoCompuesto;
use Graficos\Punto;

class EditorDeImagenes {
	private GraficoCompuesto $todos;

	function cargar() {
		$this->todos = new GraficoCompuesto;
		$this->todos->añadir(new Punto(1, 2));
		$this->todos->añadir(new Circulo(5, 3, 10));
	}

	function agruparSeleccionados(Grafico ...$componentes) {
		$grupo = new GraficoCompuesto;

		foreach ($componentes as $componente) {
			$grupo->añadir($componente);
			$this->todos->eliminar($componente);
		}

		$this->todos->añadir($grupo);
		$this->todos->dibujar();
	}
}

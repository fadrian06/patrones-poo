<?php

class CalculadorDeTarifas {
	function obtenerTarifa($pais, $estado, $producto) {
		if ($pais === 'US') {
			return $this->obtenerTarifaDeEstadosUnidos($estado);
		} elseif ($pais === 'EU') {
			return $this->obtenerTarifaDeEuropa($pais);
		}

		return $this->obtenerTarifaDeChina($producto);
	}

	function obtenerTarifaDeEstadosUnidos($estado) {
		return .07;
	}

	function obtenerTarifaDeEuropa($pais) {
		return .2;
	}

	function obtenerTarifaDeChina($producto) {
		return ((rand() % 10) + 1) / 10;
	}
}

<?php

use Envios\Envio;

class Pedido {
	private $elementosEnLinea = [];

	function __construct(private Envio $envio) {}

	function obtenerTotal() {}

	function obtenerPesoTotal() {
		return rand(1, 100);
	}

	function asignarTipoDeEnvio(Envio $tipo) {
		$this->envio = $tipo;
	}

	function obtenerCostoDeEnvio() {
		return $this->envio->obtenerCoste($this);
	}

	function obtenerFechaDeEnvio() {
		return $this->envio->obtenerFecha($this);
	}
}

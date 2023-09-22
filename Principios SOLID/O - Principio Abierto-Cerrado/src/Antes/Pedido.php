<?php

class Pedido {
	private $elementosEnLinea = [];
	private $envio;

	function obtenerTotal() {}

	function obtenerPesoTotal() {
		return rand();
	}

	function asignarTipoDeEnvio($tipoDeEnvio) {
		$this->envio = $tipoDeEnvio;
	}

	function obtenerCostoDeEnvio() {
		if ($this->envio === 'tierra') {
			if ($this->obtenerTotal() > 100) {
				return 0;
			}

			return max(10, $this->obtenerPesoTotal() * 1.5);
		}

		if ($this->envio === 'aire') {
			return max(20, $this->obtenerPesoTotal() * 3);
		}
	}

	function obtenerFechaDeEnvio() {}
}

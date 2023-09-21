<?php

class Pedido {
	/** @var ProductoEnLinea[] */
	private $elementosEnLinea = [];
	private $pais;
	private $estado;
	private $ciudad;

	function obtenerTotal() {
		$total = 0;

		foreach ($this->elementosEnLinea as $elemento) {
			$subtotal = $elemento->precio * $elemento->cantidad;
			$total += $subtotal * $this->obtenerTarifa(
				$this->pais,
				$this->estado,
				$elemento->producto
			);
		}

		return $total;
	}

	function obtenerTarifa($pais, $estado, $producto) {
		if ($pais === 'US') {
			return .07;
		} elseif ($pais === 'EU') {
			return .2;
		}

		return 0;
	}
}

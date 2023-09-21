<?php

class Pedido {
	/** @var ProductoEnLinea[] */
	private $elementosEnLinea = [];
	private $pais;
	private $estado;
	private $ciudad;

	function __construct(private CalculadorDeTarifas $calculadorDeTarifas) {}

	function obtenerTotal() {
		$total = 0;

		foreach ($this->elementosEnLinea as $elemento) {
			$subtotal = $elemento->precio * $elemento->cantidad;
			$total += $subtotal * $this->calculadorDeTarifas->obtenerTarifa(
				$this->pais,
				$this->estado,
				$elemento->producto
			);
		}

		return $total;
	}
}

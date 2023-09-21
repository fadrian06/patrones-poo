<?php

class Pedido {
	/** @var ProductoEnLinea[] */
	private $elementosEnLinea = [];
	private $pais;

	static function obtenerTotal(Pedido $pedido) {
		$total = 0;

		foreach ($pedido->elementosEnLinea as $elemento) {
			$total += $elemento->precio * $elemento->cantidad;

			if ($pedido->pais === 'US') {
				$total += $total * .07;
			} elseif ($pedido->pais === 'EU') {
				$total += $total * .2;
			}
		}

		return $total;
	}
}

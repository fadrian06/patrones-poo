<?php

class Pedido {
	/** @var ProductoEnLinea[] */
	private $elementosEnLinea = [];
	private $pais;

	static function obtenerTotal(self $pedido) {
		$total = 0;

		foreach ($pedido->elementosEnLinea as $elemento) {
			$total += $elemento->precio * $elemento->cantidad;
			$total += $total * self::obtenerTarifa($pedido->pais);
		}

		return $total;
	}

	static function obtenerTarifa($pais) {
		if ($pais === 'US') {
			return .07;
		} elseif ($pais === 'EU') {
			return .2;
		}

		return 0;
	}
}

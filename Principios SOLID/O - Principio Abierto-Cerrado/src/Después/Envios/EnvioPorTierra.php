<?php

namespace Envios;

use Fecha;
use Pedido;

class EnvioPorTierra implements Envio {
	function obtenerCoste(Pedido $pedido): float {
		if ($pedido->obtenerTotal() > 100) {
			return 0;
		}

		return max(10, $pedido->obtenerPesoTotal() * 1.5);
	}

	function obtenerFecha(Pedido $pedido): Fecha {
		return new Fecha;
	}
}

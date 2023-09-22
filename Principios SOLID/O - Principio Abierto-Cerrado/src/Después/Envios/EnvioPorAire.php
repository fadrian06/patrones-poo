<?php

namespace Envios;

use Fecha;
use Pedido;

class EnvioPorAire implements Envio {
	function obtenerCoste(Pedido $pedido): float {
		return max(20, $pedido->obtenerPesoTotal() * 3);
	}

	function obtenerFecha(Pedido $pedido): Fecha {
		return new Fecha;
	}
}

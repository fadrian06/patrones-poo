<?php

namespace Envios;

use Fecha;
use Pedido;

interface Envio {
	function obtenerCoste(Pedido $pedido): float;
	function obtenerFecha(Pedido $pedido): Fecha;
}

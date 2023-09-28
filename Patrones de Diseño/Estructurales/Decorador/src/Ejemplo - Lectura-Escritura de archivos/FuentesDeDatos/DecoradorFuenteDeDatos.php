<?php

namespace FuentesDeDatos;

class DecoradorFuenteDeDatos implements FuenteDeDatos {
	function __construct(private FuenteDeDatos $envuelto) {
	}

	function escribir(Datos $datos) {
		$this->envuelto->escribir($datos);
	}

	function leerDatos(): Datos {
		return $this->envuelto->leerDatos();
	}
}

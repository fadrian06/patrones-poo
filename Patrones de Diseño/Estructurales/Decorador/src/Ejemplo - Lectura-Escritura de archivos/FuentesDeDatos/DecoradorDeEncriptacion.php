<?php

namespace FuentesDeDatos;

class DecoradorDeEncriptacion extends DecoradorFuenteDeDatos {
	function escribir(Datos $datos) {
		$encriptados = $this->encriptar($datos);
		parent::escribir($encriptados);
	}

	function leerDatos(): Datos {
		$encriptados = parent::leerDatos();
		return $this->desencriptar($encriptados);
	}

	private function encriptar(Datos $datos): Datos {
		return new Datos(strrev($datos->contenido));
	}

	private function desencriptar(Datos $datos): Datos {
		return $this->encriptar($datos);
	}
}

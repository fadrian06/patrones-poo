<?php

namespace FuentesDeDatos;

class DecoradorDeCompresion extends DecoradorFuenteDeDatos {
	function escribir(Datos $datos) {
		$comprimidos = $this->comprimir($datos);
		parent::escribir($comprimidos);
	}

	function leerDatos(): Datos {
		$comprimidos = parent::leerDatos();
		return $this->descomprimir($comprimidos);
	}

	private function comprimir(Datos $datos): Datos {
		$comprimidos = base64_encode($datos);
		return new Datos($comprimidos);
	}

	private function descomprimir(Datos $datos): Datos {
		$descomprimidos = base64_decode($datos);
		return new Datos($descomprimidos);
	}
}

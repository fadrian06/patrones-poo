<?php

namespace ProveedoresDeNube\Implementados;

use ProveedoresDeNube\ProveedorDeNube;

use Exception;

class Dropbox implements ProveedorDeNube {
	function almacenarArchivo($nombre) {
	}

	function obtenerArchivo($nombre) {
	}

	function crearServidor($region) {
		throw new Exception('No implementado');
	}

	function listarServidores($region) {
		throw new Exception('No implementado');
	}

	function obtenerDireccionCDN() {
		throw new Exception('No implementado');
	}
}

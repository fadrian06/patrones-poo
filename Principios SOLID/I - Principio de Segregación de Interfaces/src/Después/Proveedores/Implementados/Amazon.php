<?php

namespace Proveedores\Implementados;

use Proveedores\ProveedorDeAlmacenamiento;
use Proveedores\ProveedorDeCDN;
use Proveedores\ProveedorDeHosting;

class Amazon implements
	ProveedorDeHosting,
	ProveedorDeCDN,
	ProveedorDeAlmacenamiento {

	function almacenarArchivo($nombre) {
	}

	function obtenerArchivo($nombre) {
	}

	function crearServidor($region) {
	}

	function listarServidores($region) {
	}

	function obtenerDireccionCDN() {
	}
}

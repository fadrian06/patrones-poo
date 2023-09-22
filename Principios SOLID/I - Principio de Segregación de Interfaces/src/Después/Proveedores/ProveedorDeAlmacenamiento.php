<?php

namespace Proveedores;

interface ProveedorDeAlmacenamiento {
	function almacenarArchivo($nombre);
	function obtenerArchivo($nombre);
}

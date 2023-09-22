<?php

namespace Proveedores;

interface ProveedorDeHosting {
	function crearServidor($region);
	function listarServidores($region);
}

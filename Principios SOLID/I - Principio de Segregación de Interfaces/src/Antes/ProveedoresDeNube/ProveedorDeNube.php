<?php

namespace ProveedoresDeNube;

interface ProveedorDeNube {
	function almacenarArchivo($nombre);
	function obtenerArchivo($nombre);
	function crearServidor($region);
	function listarServidores($region);
	function obtenerDireccionCDN();
}

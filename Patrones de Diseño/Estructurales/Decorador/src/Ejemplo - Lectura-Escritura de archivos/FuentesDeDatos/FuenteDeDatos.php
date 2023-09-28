<?php

namespace FuentesDeDatos;

interface FuenteDeDatos {
	function escribir(Datos $datos);
	function leerDatos(): Datos;
}

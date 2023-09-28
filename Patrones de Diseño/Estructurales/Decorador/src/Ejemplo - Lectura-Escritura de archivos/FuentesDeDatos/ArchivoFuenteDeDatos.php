<?php

namespace FuentesDeDatos;

class ArchivoFuenteDeDatos implements FuenteDeDatos {
	function __construct(private string $nombreDeArchivo) {
	}

	function escribir(Datos $datos) {
		file_put_contents($this->nombreDeArchivo, $datos->contenido);
	}

	function leerDatos(): Datos {
		return new Datos(file_get_contents($this->nombreDeArchivo));
	}
}

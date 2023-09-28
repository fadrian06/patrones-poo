<?php

namespace FuentesDeDatos;

use Stringable;

readonly class Datos implements Stringable {
	function __construct(public string $contenido) {
	}

	function __toString(): string {
		return $this->contenido;
	}
}

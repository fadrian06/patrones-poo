<?php

namespace Subsistema;

readonly class ArchivoDeVideo {
	function __construct(private string $nombreDeArchivo) {}

	function extension(): string {
		$partes = explode('.', $this->nombreDeArchivo);
		return $partes[count($partes) - 1];
	}
}

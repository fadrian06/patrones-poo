<?php

use FuentesDeDatos\Datos;
use FuentesDeDatos\FuenteDeDatos;

class AdministradorDeSalarios {
	function __construct(private FuenteDeDatos $fuente) {
	}

	function cargar(): string {
		return $this->fuente->leerDatos();
	}

	function guardar() {
		$this->fuente->escribir($this->registrosDeSalarios());
	}

	private function registrosDeSalarios(): Datos {
		$salarios = [
			[
				'id' => rand(),
				'salario' => rand(1, 100),
				'idEmpleado' => rand()
			]
		];

		return new Datos(json_encode($salarios));
	}
}

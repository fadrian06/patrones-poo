<?php

use FuentesDeDatos\ArchivoFuenteDeDatos;
use FuentesDeDatos\Datos;
use FuentesDeDatos\DecoradorDeCompresion;
use FuentesDeDatos\DecoradorDeEncriptacion;

class Aplicacion {
	function ejemploDeUsoDeVolcado() {
		$registrosDeSalarios = $this->registrosDeSalarios();

		$fuente = new ArchivoFuenteDeDatos(__DIR__ . '/algunArchivo.dat');
		$fuente->escribir($registrosDeSalarios);
		echo "{$fuente->leerDatos()}\n";

		$fuente = new DecoradorDeCompresion($fuente);
		$fuente->escribir($registrosDeSalarios);
		echo "{$fuente->leerDatos()}\n";

		$fuente = new DecoradorDeEncriptacion($fuente);
		$fuente->escribir($registrosDeSalarios);
		echo "{$fuente->leerDatos()}\n";
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

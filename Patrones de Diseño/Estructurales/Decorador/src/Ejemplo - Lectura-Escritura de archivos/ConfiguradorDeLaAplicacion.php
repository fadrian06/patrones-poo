<?php

use FuentesDeDatos\ArchivoFuenteDeDatos;
use FuentesDeDatos\DecoradorDeCompresion;
use FuentesDeDatos\DecoradorDeEncriptacion;

class ConfiguradorDeLaAplicacion {
	private bool $habilitadaEncriptacion;
	private bool $habilitadaCompresion;

	function __construct() {
		$this->habilitadaCompresion = rand(0, 1) ? true : false;
		$this->habilitadaEncriptacion = rand(0, 1) ? true : false;
	}

	function ejemploDeConfiguracion() {
		$fuente = new ArchivoFuenteDeDatos(__DIR__ . '/salarios.dat');

		if ($this->habilitadaEncriptacion) {
			$fuente = new DecoradorDeEncriptacion($fuente);
		}

		if ($this->habilitadaCompresion) {
			$fuente = new DecoradorDeCompresion($fuente);
		}

		$administradorDeSalarios = new AdministradorDeSalarios($fuente);
		$administradorDeSalarios->guardar();
		$salarios = $administradorDeSalarios->cargar();
		echo "{$salarios}\n";
	}
}

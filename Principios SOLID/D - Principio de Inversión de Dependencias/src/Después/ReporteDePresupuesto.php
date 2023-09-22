<?php

use BasesDeDatos\BaseDeDatos;

class ReporteDePresupuesto {
	function __construct(private BaseDeDatos $baseDeDatos) {}

	function abrir($fecha) {}
	
	function guardar() {
		$this->baseDeDatos->insertar();
	}
}

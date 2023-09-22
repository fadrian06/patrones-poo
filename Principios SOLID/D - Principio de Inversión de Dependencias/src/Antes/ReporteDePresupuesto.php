<?php

class ReporteDePresupuesto {
	function __construct(private BaseDeDatosMySQL $baseDeDatos) {}

	function abrir($fecha) {}
	
	function guardar() {
		$this->baseDeDatos->insertar();
	}
}

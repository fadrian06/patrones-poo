<?php

use Componentes\Boton;
use GUI\FabricaGUI;

class Aplicacion {
	private Boton $boton;

	function __construct(private FabricaGUI $fabrica) {}

	function crearUI() {
		$this->boton = $this->fabrica->crearBoton();
	}

	function pintar() {
		$this->boton->pintar();
	}
}

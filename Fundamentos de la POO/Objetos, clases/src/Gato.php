<?php

class Gato {
	public $nombre;
	public $sexo;
	public $edad;
	public $peso;
	public $color;
	public $textura;

	function respirar() {}

	function comer($comida) {
		echo "Comiendo $comida\n";
	}

	function correr($destino) {
		echo "Corriendo hacia $destino\n";
	}

	function dormir($horas) {
		echo "Voy a dormir $horas horas\n";
	}

	function meow() {}
}

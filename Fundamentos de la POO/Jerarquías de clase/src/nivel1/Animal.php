<?php

class Animal {
	public $nombre;
	public $sexo;
	public $edad;
	public $peso;
	public $color;

	function respirar() {}

	function comer($comida) {
		echo "Comiendo $comida\n";
	}

	function correr($destino) {
		echo "Corriendo hacia $destino\n";
	}

	function dormir($horas) {
		echo "Durmiendo $horas horas\n";
	}
}

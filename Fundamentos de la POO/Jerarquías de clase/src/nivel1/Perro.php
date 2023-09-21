<?php

class Perro extends Animal {
	private Humano $mejorAmigo;

	function __construct() {
		$this->mejorAmigo = new Humano;

		printf(
			"Has creado un perro que %s un mejor amigo :D\n",
			$this->mejorAmigo ? 'posee' : 'no posee'
		);
	}

	function ladrar() {}
}

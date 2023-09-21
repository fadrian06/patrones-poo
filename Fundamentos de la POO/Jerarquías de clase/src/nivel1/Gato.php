<?php

class Gato extends Animal {
	private bool $esFeo;

	function __construct() {
		$this->esFeo = false;
		printf(
			"Has creado un gato que %s feo :D\n",
			$this->esFeo ? 'es' : 'no es'
		);
	}

	function maullar() {}
}

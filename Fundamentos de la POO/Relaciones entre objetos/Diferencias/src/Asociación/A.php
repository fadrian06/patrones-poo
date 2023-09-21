<?php

class A {
	function __construct(private B $dependencia) {}

	function ejecutarLogica() {
		// $this->dependencia->hacerAlgo();

		/* Hemos tenido que modificar la llamada al método para que nuestro
		programa no de errores.
		DEPENDEMOS DE LOS CAMBIOS DE B y SABEMOS QUE ESTAMOS USANDO A LA CLASE B
		Y NO A UNA ABSTRACCIÓN DE B. */
		$this->dependencia->hacerAlgo(true);
	}
}

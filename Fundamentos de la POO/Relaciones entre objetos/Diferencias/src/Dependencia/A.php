<?php

class A {
	function hacerAlgo(B $dependencia) {
		// $dependencia->hacerAlgo();

		/* Hemos tenido que modificar la llamada al método para que nuestro
		programa no de errores. DEPENDEMOS DE LOS CAMBIOS DE B */
		$dependencia->hacerAlgo(true);
	}
}

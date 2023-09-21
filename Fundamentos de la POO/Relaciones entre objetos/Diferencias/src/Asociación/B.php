<?php

class B {
	// Antes este método público no requería parámetros.
	// function hacerAlgo() {}

	/*
		Ahora los clientes de esta clase tendrán que modificar la llamada a
		este método.
	 */
	function hacerAlgo(bool $ahora) {
		if ($ahora) {
			echo "Haciendo algo...\n";
		}
	}
}

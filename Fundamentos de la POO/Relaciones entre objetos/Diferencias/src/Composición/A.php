<?php

class A {
	/** @var B[] */
	private array $objetosB = [];

	function agregarB() {
		$this->objetosB[] = new B;
	}

	function ejecutarLogica() {
		foreach ($this->objetosB as $dependencia) {
			// $dependencia->hacerAlgo();

			/* Hemos tenido que modificar la llamada al método para que nuestro
			programa no de errores.
			DEPENDEMOS DE LOS CAMBIOS DE B y SABEMOS QUE ESTAMOS USANDO A LA CLASE B
			Y NO A UNA ABSTRACCIÓN DE B. */
			$dependencia->hacerAlgo(true);
		}
	}
}

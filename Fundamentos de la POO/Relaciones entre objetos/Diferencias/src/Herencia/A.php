<?php

class A extends B {
	// function hacerAlgo() {}

	/* Hemos tenido que modificar la firma del método porque así lo dicta
	B. DEPENDEMOS DE B. */
	function hacerAlgo(bool $ahora) {}
}

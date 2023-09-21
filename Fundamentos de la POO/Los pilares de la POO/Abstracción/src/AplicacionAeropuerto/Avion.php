<?php

namespace AplicacionAeropuerto;

class Avion {
	private $asientos = [];

	function reservarAsiento($n) {
		if (!isset($asientos[$n])) {
			$asientos[$n] = true;
			return;
		}
	}
}

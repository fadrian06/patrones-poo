<?php

use Transportes\TransporteAereo;

class Aeropuerto {
	function aceptar(TransporteAereo $vehiculo) {
		printf("Aceptando vehículo tipo: %s\n", $vehiculo::class);
	}
}

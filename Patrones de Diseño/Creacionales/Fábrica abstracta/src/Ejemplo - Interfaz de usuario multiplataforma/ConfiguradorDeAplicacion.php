<?php

use GUI\FabricaMAC;
use GUI\FabricaWindows;

enum SO {
	case Windows;
	case MAC;
	case Desconocido;
}

readonly class Configuracion {
	function __construct(public SO $SO) {}
}

function leerArchivoDeConfiguracionDeLaAplicacion(): Configuracion {
	return new Configuracion(PHP_OS === 'WINNT' ? SO::Windows : SO::MAC);
}

class ConfiguradorDeAplicacion {
	function __construct() {
		$configuracion = leerArchivoDeConfiguracionDeLaAplicacion();

		if ($configuracion->SO === SO::Windows) {
			$fabrica = new FabricaWindows;
		} elseif ($configuracion->SO === SO::MAC) {
			$fabrica = new FabricaMAC;
		} else {
			throw new Exception("¡Error! Sistema Operativo desconocido.");
		}

		$aplicación = new Aplicacion($fabrica);
		$aplicación->crearUI();
		$aplicación->pintar();
	}
}

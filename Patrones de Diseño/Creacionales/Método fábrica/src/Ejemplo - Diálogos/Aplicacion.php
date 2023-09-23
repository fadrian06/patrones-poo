<?php

use Dialogos\Dialogo;
use Dialogos\DialogoWeb;
use Dialogos\DialogoWindows;

use function Funciones\leerArchivoDeConfiguracionDeAplicacion;

class Aplicacion {
	private Dialogo $dialogo;

	function iniciar() {
		$this->inicializar();
		$this->dialogo->renderizar();
	}

	private function inicializar() {
		$configuracion = leerArchivoDeConfiguracionDeAplicacion();

		switch ($configuracion->SO) {
			case SistemaOperativo::Windows:
				$this->dialogo = new DialogoWindows;
				return;

			case SistemaOperativo::Web:
				$this->dialogo = new DialogoWeb;
				return;

			default:
				throw new Exception('¡Error! Sistema operativo desconocido.');
		}
	}
}

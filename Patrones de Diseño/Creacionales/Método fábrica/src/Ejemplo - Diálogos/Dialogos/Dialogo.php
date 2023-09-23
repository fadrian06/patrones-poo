<?php

namespace Dialogos;

use Botones\Boton;

abstract class Dialogo {
	abstract function crearBoton(): Boton;

	function renderizar() {
		$botonOk = $this->crearBoton();
		$botonOk->onClick([$this, 'cerrarDialogo']);
		echo $botonOk->renderizar();
	}

	function cerrarDialogo(): string {
		return 'Cerrando diálogo...';
	}
}

<?php

namespace Dialogos;

use Botones\Boton;
use Botones\BotonWindows;

class DialogoWindows extends Dialogo {
	function crearBoton(): Boton {
		return new BotonWindows;
	}
}

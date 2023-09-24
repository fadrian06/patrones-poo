<?php

namespace GUI;

use Componentes\Boton;
use Componentes\Checkbox;
use Componentes\Windows\BotonWindows;
use Componentes\Windows\CheckboxWindows;

class FabricaWindows implements FabricaGUI {
	function crearBoton(): Boton {
		return new BotonWindows;
	}

	function crearCheckbox(): Checkbox {
		return new CheckboxWindows;
	}
}

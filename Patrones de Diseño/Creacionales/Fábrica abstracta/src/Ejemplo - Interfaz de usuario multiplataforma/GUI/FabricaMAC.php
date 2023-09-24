<?php

namespace GUI;

use Componentes\Boton;
use Componentes\Checkbox;
use Componentes\MAC\BotonMAC;
use Componentes\MAC\CheckboxMAC;

class FabricaMAC implements FabricaGUI {
	function crearBoton(): Boton {
		return new BotonMAC;
	}

	function crearCheckbox(): Checkbox {
		return new CheckboxMAC;
	}
}

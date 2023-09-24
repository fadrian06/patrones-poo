<?php

namespace GUI;

use Componentes\Boton;
use Componentes\Checkbox;

interface FabricaGUI {
	function crearBoton(): Boton;
	function crearCheckbox(): Checkbox;
}

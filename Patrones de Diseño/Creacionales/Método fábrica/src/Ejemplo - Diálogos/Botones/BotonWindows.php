<?php

namespace Botones;

class BotonWindows implements Boton {
	function renderizar(): string {
		return "Soy un botón de Windows\n";
	}

	function onClick(callable $f) {}
}

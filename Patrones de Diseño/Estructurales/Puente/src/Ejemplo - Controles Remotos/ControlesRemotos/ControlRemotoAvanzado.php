<?php

namespace ControlesRemotos;

class ControlRemotoAvanzado extends ControlRemoto {
	function silenciar() {
		$this->dispositivo->asignarVolumen(0);
	}
}

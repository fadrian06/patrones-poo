<?php

namespace ControlesRemotos;

use Dispositivos\Dispositivo;

class ControlRemoto {
	function __construct(protected Dispositivo $dispositivo) {
	}

	function alternarEncendidoApagado() {
		if ($this->dispositivo->estaEncendido()) {
			$this->dispositivo->apagar();
		} else {
			$this->dispositivo->encender();
		}
	}

	function bajarVolumen() {
		$volumenActual = $this->dispositivo->obtenerVolumen();
		$this->dispositivo->asignarVolumen($volumenActual - 10);
	}

	function subirVolumen() {
		$volumenActual = $this->dispositivo->obtenerVolumen();
		$this->dispositivo->asignarVolumen($volumenActual + 10);
	}

	function bajarCanal() {
		$canalActual = $this->dispositivo->obtenerCanal();
		$this->dispositivo->asignarCanal($canalActual - 1);
	}

	function subirCanal() {
		$canalActual = $this->dispositivo->obtenerCanal();
		$this->dispositivo->asignarCanal($canalActual + 1);
	}
}

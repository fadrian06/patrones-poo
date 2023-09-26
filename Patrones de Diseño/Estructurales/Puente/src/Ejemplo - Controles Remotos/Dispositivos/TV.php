<?php

namespace Dispositivos;

class TV implements Dispositivo {
	private bool $encendido = false;
	private int $volumen = 0;
	private int $canal = 1;

	function estaEncendido(): bool {
		return $this->encendido;
	}

	function encender(): void {
		$this->encendido = true;
	}

	function apagar(): void {
		$this->encendido = false;
	}

	function obtenerVolumen(): int {
		return $this->volumen;
	}

	function asignarVolumen(int $porcentaje): void {
		if ($porcentaje < 0) {
			return $this->volumen = 0;
		}

		if ($porcentaje > 100) {
			return $this->volumen = 100;
		}

		$this->volumen = $porcentaje;
	}

	function obtenerCanal(): int {
		return $this->canal;
	}

	function asignarCanal(int $canal): void {
		if ($canal < 1) {
			return $this->canal = 1;
		}

		$this->canal = $canal;
	}
}

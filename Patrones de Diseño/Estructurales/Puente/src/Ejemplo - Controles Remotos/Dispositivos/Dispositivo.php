<?php

namespace Dispositivos;

interface Dispositivo {
	function estaEncendido(): bool;
	function encender(): void;
	function apagar(): void;
	function obtenerVolumen(): int;
	function asignarVolumen(int $porcentaje): void;
	function obtenerCanal(): int;
	function asignarCanal(int $canal): void;
}

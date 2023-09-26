<?php

class BaseDeDatos {
	private static self $instancia;

	private function __construct() {}

	static function obtenerInstancia() {
		if (empty(self::$instancia)) {
			self::$instancia = new self;
		}

		return self::$instancia;
	}

	function consulta(string $sql) {}
}

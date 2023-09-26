<?php

class UnicaInstancia {
	private static self $instancia;

	private function __construct() {}

	static function obtenerInstancia() {
		if (empty(self::$instancia)) {
			self::$instancia = new self;
		}

		return self::$instancia;
	}
}

class Cliente {
	function __construct() {
		$referencia1 = UnicaInstancia::obtenerInstancia();
		$referencia2 = UnicaInstancia::obtenerInstancia();

		var_dump(compact('referencia1', 'referencia2'));
		var_dump($referencia1 === $referencia2);
	}
}

new Cliente;

<?php

namespace Dialogos;

use Botones\Boton;
use Botones\BotonHTML;

use function Funciones\generarID;

class DialogoWeb extends Dialogo {
	private string $id;
	private static bool $primerDialogo;

	function __construct() {
		$this->id = generarID();
		self::$primerDialogo = true;
	}

	function crearBoton(): Boton {
		return new BotonHTML;
	}

	function renderizar() {
		ob_start();
		parent::renderizar();
		$boton = ob_get_clean();

		if (self::$primerDialogo) {
			self::crearPolyfills();
		}

		echo <<<HTML
			<dialog id="{$this->id}">{$boton}</dialog>
			<script>new Dialogo('{$this->id}').showModal()</script>
		HTML;
		self::$primerDialogo = false;
	}

	function cerrarDialogo(): string {
		return <<<JAVASCRIPT
			function(evento) {
				new Dialogo('{$this->id}').close()
			}
		JAVASCRIPT;
	}

	private static function crearPolyfills() {
		$js = file_get_contents(__DIR__ . '/Dialogo.js');
		echo "<script>{$js}</script>";
	}
}

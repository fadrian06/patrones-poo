<?php

namespace Botones;

use function Funciones\generarID;

class BotonHTML implements Boton {
	private string $onClick = '';
	private string $id;

	function __construct() {
		$this->id = generarID();
	}

	function renderizar(): string {
		$script = '';

		if ($this->onClick) {
			$script = <<<HTML
				<script>
					document.querySelector('#{$this->id}').onclick = {$this->onClick}
				</script>
			HTML;
		}

		return <<<HTML
			<button id={$this->id}>Hola, soy un botón HTML</button>
			{$script}
		HTML;
	}

	function onClick(callable $f) {
		$this->onClick = $f();
	}
}

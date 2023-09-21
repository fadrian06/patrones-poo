<?php

/**
 * @method void agregarDepartamento(string $nombre)
 * @method void agregarDepartamento(callable(): Departamento $funcion)
 */
class Universidad {
	private array $departamentos = [];

	function obtenerDepartamentos() {
		return $this->departamentos;
	}

	function __call(string $metodo, array $argumentos) {
		if ($metodo === 'agregarDepartamento') {
			[$nombreOFuncion] = $argumentos;

			if (is_callable($nombreOFuncion)) {
				/*
					En caso que por parámetro se pase una función que al ejecutarla
					retorne una instancia de Departamento, no hay manera en que
					las variables locales dentro de la función sean accesibles para
					el resto de código cliente, excepto que las declare como globales
					:D, lo cual es mala práctica y deja de ser composición para ser
					una agregación.
				*/
				$this->departamentos[] = $nombreOFuncion();
				return;
			}

			/*
				Pasar los parámetros requeridos para instanciar un Departamento
				hace que la objeto Departamento se destruya cuando se destruya el
				objeto Universidad, además de que no habrá variable en el exterior
				que refererencie al objeto Departamento creado dentro de la clase
				Universidad.
			 */
			$this->departamentos[] = new Departamento($nombreOFuncion);
		}
	}
}

<?php

require '../../../../../autoload.php';

class Aplicacion {
	function iniciar() {
		$baseDeDatos1 = BaseDeDatos::obtenerInstancia();
		$baseDeDatos1->consulta('SELECT ...');

		$baseDeDatos2 = BaseDeDatos::obtenerInstancia();
		$baseDeDatos2->consulta('SELECT ...');

		printf(
			'$baseDeDatos1 === $baseDeDatos2: %s',
			$baseDeDatos1 === $baseDeDatos2 ? 'true' : 'false'
		);
	}
}

(new Aplicacion)->iniciar();

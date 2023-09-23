<?php

namespace Funciones;

use Configuracion;
use SistemaOperativo;

function leerArchivoDeConfiguracionDeAplicacion(): Configuracion {
	$sistemaOperativo = @$_SERVER['HTTP_HOST']
		? SistemaOperativo::Web
		: SistemaOperativo::Windows;

	return new Configuracion($sistemaOperativo);
}

function generarID() {
	return md5(rand() . time());
}

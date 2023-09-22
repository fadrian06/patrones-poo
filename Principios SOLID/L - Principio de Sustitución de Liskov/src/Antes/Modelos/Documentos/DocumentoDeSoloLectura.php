<?php

namespace Modelos\Documentos;

use Exception;

class DocumentoDeSoloLectura extends Documento {
	function guardar() {
		throw new Exception('No se puede guardar un archivo de sólo lectura.');
	}
}

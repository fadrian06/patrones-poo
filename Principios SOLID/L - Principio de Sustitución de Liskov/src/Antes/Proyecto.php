<?php

use Modelos\Documentos\Documento;
use Modelos\Documentos\DocumentoDeSoloLectura;

class Proyecto {
	/** @var Documento[] */
	private $documentos = [];

	function añadirDocumento() {
		$this->documentos[] = new Documento;
	}

	function abrirTodo() {
		foreach ($this->documentos as $documento) {
			$documento->abrir();
		}
	}

	function guardarTodo() {
		foreach ($this->documentos as $documento) {
			if (!$documento instanceof DocumentoDeSoloLectura) {
				$documento->guardar();
			}
		}
	}
}

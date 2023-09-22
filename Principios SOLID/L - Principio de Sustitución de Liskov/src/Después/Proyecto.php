<?php

use Modelos\Documentos\Documento;
use Modelos\Documentos\DocumentoEscribible;

class Proyecto {
	/** @var Documento[] */
	private $documentos = [];
	/** @var DocumentoEscribible[] */
	private $documentosEscribibles = [];

	function añadirDocumento(bool $esEscribible) {
		$this->documentos[] = new Documento;

		if ($esEscribible) {
			$this->documentosEscribibles[] = new DocumentoEscribible;
		}
	}

	function abrirTodo() {
		foreach ($this->documentos as $documento) {
			$documento->abrir();
		}
	}

	function guardarTodo() {
		foreach ($this->documentosEscribibles as $documento) {
			$documento->guardar();
		}
	}
}

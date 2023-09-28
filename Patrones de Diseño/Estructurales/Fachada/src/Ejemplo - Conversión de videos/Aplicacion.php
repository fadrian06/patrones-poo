<?php

require '../../../../../autoload.php';

class Aplicacion {
	function iniciar() {
		$conversor = new ConversorDeVideo;
		$mp4 = $conversor->convertir('video-gatos-graciosos.ogg', 'mp4');
		$mp4->guardar();
	}
}

(new Aplicacion)->iniciar();

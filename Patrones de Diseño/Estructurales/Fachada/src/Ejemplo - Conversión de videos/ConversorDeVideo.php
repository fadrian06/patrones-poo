<?php

use Subsistema\ArchivoDeVideo;
use Subsistema\Codecs\CodecCompresionMPEG4;
use Subsistema\Codecs\CodecCompresionOgg;
use Subsistema\Codecs\FabricaDeCodec;
use Subsistema\LectorDeTasaDeBits;
use Subsistema\MezcladorDeAudio;

class ConversorDeVideo {
	function convertir(string $nombreDeArchivo, string $formato): Archivo {
		$archivo = new ArchivoDeVideo($nombreDeArchivo);
		$codecFuente = (new FabricaDeCodec)->extraer($archivo);

		if ($formato === 'mp4') {
			$codecDestino = new CodecCompresionMPEG4;
		} else {
			$codecDestino = new CodecCompresionOgg;
		}

		$buffer = LectorDeTasaDeBits::leer($nombreDeArchivo, $codecFuente);
		$resultado = LectorDeTasaDeBits::convertir($buffer, $codecDestino);
		$resultado = (new MezcladorDeAudio)->ajustar($resultado);
		return new Archivo($resultado);
	}
}

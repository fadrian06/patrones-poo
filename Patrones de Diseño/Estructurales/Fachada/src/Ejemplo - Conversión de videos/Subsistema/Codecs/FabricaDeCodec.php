<?php

namespace Subsistema\Codecs;

use Subsistema\ArchivoDeVideo;

class FabricaDeCodec {
	function extraer(ArchivoDeVideo $video): Codec {
		return match ($video->extension()) {
			'mp4' => new CodecCompresionMPEG4,
			default => new CodecCompresionOgg
		};
	}
}

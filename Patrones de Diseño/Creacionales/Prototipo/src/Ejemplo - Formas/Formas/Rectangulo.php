<?php

namespace Formas;

class Rectangulo extends Forma {
	function __construct(
		int $x,
		int $y,
		string $color,
		private int $ancho,
		private int $alto
	) {
		parent::__construct($x, $y, $color);
	}

	function clonar(): self {
		return new self($this->x(), $this->y(), $this->color(), $this->ancho, $this->alto);
	}
}

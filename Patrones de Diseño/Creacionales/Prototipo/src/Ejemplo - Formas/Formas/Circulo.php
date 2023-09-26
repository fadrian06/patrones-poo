<?php

namespace Formas;

class Circulo extends Forma {
	function __construct(
		int $x,
		int $y,
		string $color,
		private int $radio
	) {
		parent::__construct($x, $y, $color);
	}

	function clonar(): self {
		return new self($this->x(), $this->y(), $this->color(), $this->radio);
	}
}

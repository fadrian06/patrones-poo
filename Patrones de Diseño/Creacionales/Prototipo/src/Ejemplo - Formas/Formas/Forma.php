<?php

namespace Formas;

abstract class Forma {
	function __construct(private int $x, private int $y, private string $color) {}
	abstract function clonar(): self;

	function x(): int {
		return $this->x;
	}

	function y(): int {
		return $this->y;
	}

	function color(): string {
		return $this->color;
	}
}

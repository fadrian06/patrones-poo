<?php

namespace Botones;

interface Boton {
	function renderizar(): string;
	/** @param callable(): string $f */
	function onClick(callable $f);
}

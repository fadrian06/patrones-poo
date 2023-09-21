<?php

/**
 * @property-read float $precio
 * @property-read int $cantidad
 */
class ProductoEnLinea {
	private float $precio;
	private int $cantidad;

	function __get(string $propiedad): float|int|Producto {
		if (property_exists($this, $propiedad)) {
			return $this->$propiedad;
		}
	}
}

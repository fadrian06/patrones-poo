<?php

/**
 * @property-read float $precio
 * @property-read int $cantidad
 * @property-read Producto $producto
 */
class ProductoEnLinea {
	private float $precio;
	private int $cantidad;
	private Producto $producto;

	function __get(string $propiedad): float|int|Producto {
		if (property_exists($this, $propiedad)) {
			return $this->$propiedad;
		}
	}
}

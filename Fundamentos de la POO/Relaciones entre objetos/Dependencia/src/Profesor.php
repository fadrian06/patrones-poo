<?php

class Profesor {
	function __construct(private Estudiante $estudiante) {}

	function enseñar(Curso $curso) {
		$this->estudiante->recordar($curso->obtenerConocimiento());
	}
}

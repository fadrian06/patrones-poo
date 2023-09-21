<?php

class Departamento {
	private $profesores = [];

	function agregarProfesor(Profesor $profesor) {
		$this->profesores[] = $profesor;
	}

	function obtenerProfesores() {
		return $this->profesores;
	}
}

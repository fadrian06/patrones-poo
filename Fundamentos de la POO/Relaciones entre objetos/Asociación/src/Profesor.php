<?php

class Profesor {
	function __construct(
		public string $materia,
		public Estudiante $estudiante
	) {}
}

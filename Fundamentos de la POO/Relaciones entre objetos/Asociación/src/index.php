<?php

require '../../../../autoload.php';

$profesor = new Profesor('Matemática', new Estudiante('John'));

echo json_encode(
	compact('profesor'),
	JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
);

/*
	Salida:

	{
    "profesor": {
      "materia": "Matemática",
      "estudiante": {
        "nombre": "John"
      }
    }
	}
 */

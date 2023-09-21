<?php

require '../../../../autoload.php';

const JSON_FORMAT = JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE;

$departamento = new Departamento;
$profesorMatematica = new Profesor('Matemáticas');

$departamento->agregarProfesor($profesorMatematica);
$departamento->agregarProfesor(new Profesor('Inglés'));
$departamento->agregarProfesor(new Profesor('Química'));
$departamento->agregarProfesor(new Profesor('Matemáticas'));

echo json_encode(
	['profesores' => $departamento->obtenerProfesores()],
	JSON_FORMAT
) . "\n\n";

unset($departamento);

echo 'La variable $departamento ha perdido su valor: $departamento=';
var_dump(@$departamento);
echo "Aún \$profesorMatematica perdura en el programa:\n";
echo json_encode(compact('profesorMatematica'), JSON_FORMAT);

/*
	Salida:

	{
    "profesores": [
      {
        "materia": "Matemáticas"
      },
      {
        "materia": "Inglés"
      },
      {
        "materia": "Química"
      },
      {
        "materia": "Literatura"
      }
    ]
	}

	La variable $departamento ha perdido su valor: $departamento=NULL
	Aún $profesorMatematica perdura en el programa:
	{
    "profesorMatematica": {
      "materia": "Matemáticas"
    }
	}
 */

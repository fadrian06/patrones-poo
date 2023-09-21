<?php

require '../../../../autoload.php';

const JSON_FORMAT = JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE;

$universidad = new Universidad;

$universidad->agregarDepartamento(function () {
	$departamentoMatematicas = new Departamento('Matemáticas');

	/*
		Esta es la única manera en que la variable siga disponible una vez
		se destruya el objeto Universidad, pero ya no sería una composición
		sino una agregación.
	 */
	// $GLOBALS['departamentoMatematicas'] = $departamentoMatematicas;

	return $departamentoMatematicas;
});

$universidad->agregarDepartamento('Ciencias');
$universidad->agregarDepartamento('Artes');

echo json_encode(
	['profesores' => $universidad->obtenerDepartamentos()],
	JSON_FORMAT
) . "\n\n";

unset($universidad);

echo 'La variable $universidad ha perdido su valor: $universidad=';
var_dump(@$universidad);
echo "\$departamentoMatematicas también perdió su valor:\n";
echo json_encode(
	['departamentoMatematicas' => @$departamentoMatematicas],
	JSON_FORMAT
);

/*
	Respuesta:

	{
    "profesores": [
      {
        "nombre": "Matemáticas"
      },
      {
        "nombre": "Ciencias"
      },
      {
        "nombre": "Artes"
      }
    ]
	}

	La variable $universidad ha perdido su valor: $universidad=NULL
	$departamentoMatematicas también perdió su valor:
	{
    "departamentoMatematicas": null
	}
 */

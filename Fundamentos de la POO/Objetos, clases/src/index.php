<?php

require 'Gato.php';

$oscar = new Gato;
$oscar->nombre = 'Óscar';
$oscar->sexo = 'macho';
$oscar->edad = 3;
$oscar->peso = 7;
$oscar->color = 'marrón';
$oscar->textura = 'rayada';

$luna = new Gato;
$luna->nombre = 'Luna';
$luna->sexo = 'hembra';
$luna->edad = 2;
$luna->peso = 5;
$luna->color = 'gris';
$luna->textura = 'lisa';

echo json_encode(
	compact('oscar', 'luna'),
	JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
);

/*
	Salida:

	{
		"oscar": {
			"nombre": "Óscar",
			"sexo": "macho",
			"edad": 3,
			"peso": 7,
			"color": "marrón",
			"textura": "rayada"
		},
		"luna": {
			"nombre": "Luna",
			"sexo": "hembra",
			"edad": 2,
			"peso": 5,
			"color": "gris",
			"textura": "lisa"
		}
	}
*/

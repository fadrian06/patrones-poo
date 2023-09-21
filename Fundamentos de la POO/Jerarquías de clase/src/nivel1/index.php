<?php

require '../../../../autoload.php';

$loro = new Animal;
$loro->color = 'verde';
$loro->edad = 1;
$loro->nombre = 'Pepe';
$loro->peso = .145;
$loro->sexo = 'macho';

$gato = new Gato;
$gato->nombre = 'Óscar';
$gato->sexo = 'macho';
$gato->edad = 3;
$gato->peso = 7;
$gato->color = 'marrón';

$perro = new Perro;
$perro->nombre = 'Luna';
$perro->sexo = 'hembra';
$perro->edad = 2;
$perro->peso = 5;
$perro->color = 'gris';

echo json_encode(
	compact('loro', 'gato', 'perro'),
	JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
);

/*
	Salida:

	{
		"loro": {
	    "nombre": "Pepe",
	    "sexo": "macho",
	    "edad": 1,
	    "peso": 0.145,
	    "color": "verde"
		},
		"gato": {
	    "nombre": "Óscar",
	    "sexo": "macho",
	    "edad": 3,
	    "peso": 7,
	    "color": "marrón"
		},
		"perro": {
	    "nombre": "Luna",
	    "sexo": "hembra",
	    "edad": 2,
	    "peso": 5,
	    "color": "gris"
		}
	}
 */

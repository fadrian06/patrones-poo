<?php

require '../../../../autoload.php';

$gato = new Gato;
$perro = new Perro;
$planta = new Planta;

printf("Gato es un animal?: %s\n", $gato instanceof Animal ? 'Sí' : 'No');
printf("Gato es un organismo?: %s\n", $gato instanceof Organismo ? 'Sí' : 'No');
printf("Gato es una planta?: %s\n\n", $gato instanceof Planta ? 'Sí' : 'No');

printf("Perro es un animal?: %s\n", $perro instanceof Animal ? 'Sí' : 'No');
printf("Perro es un organismo?: %s\n", $perro instanceof Organismo ? 'Sí' : 'No');
printf("Perro es una planta?: %s\n\n", $gato instanceof Planta ? 'Sí' : 'No');

printf("Planta es un animal?: %s\n", $planta instanceof Animal ? 'Sí' : 'No');
printf("Planta es un organismo?: %s\n\n", $planta instanceof Organismo ? 'Sí' : 'No');

<?php

require '../../../../autoload.php';

$profesor = new Profesor(new Estudiante);
$profesor->enseñar(new Curso);

<?php

require 'autoload.php';

use Herencia\Transportes\Camiones\Camion;
use Herencia\Transportes\Camiones\CamionConMotorDeCombustionAutomatico;
use Herencia\Transportes\Coches\CocheElectrico;
use Herencia\Transportes\Coches\Coche;
use Herencia\Transportes\Coches\CocheConMotorDeCombustion;
use Herencia\Transportes\Coches\CocheElectricoAutomatico;

$coche = new Coche;
$cocheCombustion = new CocheConMotorDeCombustion;
$cocheElectrico = new CocheElectrico;
$cocheAutomatico = new CocheElectricoAutomatico;

$camion = new Camion;
$camionAutomatico = new CamionConMotorDeCombustionAutomatico;

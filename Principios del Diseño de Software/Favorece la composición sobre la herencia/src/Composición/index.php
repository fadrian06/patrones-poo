<?php

require 'autoload.php';

use Composicion\Conductores\Humano;
use Composicion\Conductores\Robot;
use Composicion\Motores\MotorDeCombustion;
use Composicion\Motores\MotorElectrico;
use Composicion\Transporte;

$coche = new Transporte(MotorDeCombustion::class, new Humano);
$cocheElectrico = new Transporte(MotorElectrico::class, new Humano);
$cocheAutomatico = new Transporte(MotorElectrico::class, new Robot);

$camion = new Transporte(MotorDeCombustion::class, new Humano);

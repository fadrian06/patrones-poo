<?php

require '../../../../autoload.php';

use AplicacionSimulacion\Avion as AvionSimulado;
use AplicacionAeropuerto\Avion as AvionPasajeros;

$avionSimulado = new AvionSimulado;
$avionPasajeros = new AvionPasajeros;

$avionPasajeros->reservarAsiento(0);
$avionSimulado->volar();

<?php

require '../../../../autoload.php';

$aeropuerto = new Aeropuerto;

$aeropuerto->aceptar(new Transportes\Avion);
$aeropuerto->aceptar(new Transportes\Helicoptero);
$aeropuerto->aceptar(new Transportes\GrifoDomesticado);

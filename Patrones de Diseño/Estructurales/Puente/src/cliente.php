<?php

require '../../../../autoload.php';

use ControlesRemotos\ControlRemoto;
use ControlesRemotos\ControlRemotoAvanzado;
use Dispositivos\TV;
use Dispositivos\Radio;

$tv = new TV;
$controlRemoto = new ControlRemoto($tv);
$controlRemoto->alternarEncendidoApagado();

$radio = new Radio;
$controlRemotoAvanzado = new ControlRemotoAvanzado($radio);
$controlRemotoAvanzado->silenciar();

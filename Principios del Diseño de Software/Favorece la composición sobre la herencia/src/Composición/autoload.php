<?php

spl_autoload_register(function (string $definicion) {
	$definicion = str_replace("Composicion\\", '', $definicion);
	$definicion = str_replace("\\", '/', $definicion);

	require_once "$definicion.php";
});

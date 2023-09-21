<?php

spl_autoload_register(function (string $definicion) {
	require_once "{$definicion}.php";
});

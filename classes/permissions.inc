<?php 

$permissions = new stdClass;

$permissions->reportes = [1];

$permissions->modulo["clientes"] = [1];

$permissions->modulo["ADMINS"] = [0];
$permissions->modulo["SUPERVISOR"] = [1];
$permissions->modulo["OPERADOR"] = [2];

$permissions->modulo["FIEL"] = [0, 1, 2];
$permissions->modulo["CLIENTES"] = [0];
$permissions->modulo["PRODUCTOS"] = [0];
$permissions->modulo["USUARIOS"] = [0, 1];

?>
<?php

require_once "vendor/autoload.php";

use allys\modulo\Search;

$busca = new Search;

$resultado = $busca -> getAddressFromZipcode('0100100');

print_r($resultado);
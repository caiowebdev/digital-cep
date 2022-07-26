<?php

use \Caiowebdev\DigitalCep\Search;

require_once 'vendor/autoload.php';

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('06401160');

print_r($resultado);
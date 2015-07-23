<?php

require_once 'vendor/autoload.php';

$autoloader = new Gleez\Loader\Autoloader();

$autoloader->setNamespaces('Transformers', 'src/Transformers');

$autoloader->register();


$transformers = [
    new Transformers\Optimus(),
    new Transformers\Megatron(),
    new Transformers\BamblBee()
];

foreach($transformers as $transformer) {
    $transformer->transform();
    $transformer->shoot();
    $transformer->fly();
    $transformer->getId();
    echo "<br/>";
}
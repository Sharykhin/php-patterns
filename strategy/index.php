<?php

require_once 'vendor/autoload.php';

$autoloader = new Gleez\Loader\Autoloader();

$autoloader->setNamespaces('Transformers', 'src/Transformers');
$autoloader->setNamespaces('Fly', 'src/Fly');
$autoloader->setNamespaces('RocketDump', 'src/RocketDump');

$autoloader->register();


$transformers = [
    new Transformers\Optimus(),
    new Transformers\Megatron(),
    new Transformers\BamblBee()
];

$bamblBee = new Transformers\BamblBee();
$bamblBee->setFlyBehaviour(new Fly\GadgetFly());

$bamblBee->fly();


foreach($transformers as $transformer) {
    $transformer->transform();
    $transformer->shoot();
    $transformer->fly();
    $transformer->rocketLaunch();
    $transformer->getId();
    echo "<br/>";
}
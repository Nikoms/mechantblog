<?php

include '../../autoload.php';

$builder2 = new Creation\Builder\Voiture\Builder2\VoitureBuilder();
$builder2
    ->setMarque('Mechante marque 2')
    ->setRoues(new \Creation\Builder\Voiture\PimpMyRide\Roue\RoueEclair())
    ->setVitesseMax(200)
    ->setResistance(200)
    ->setPareChocs(new \Creation\Builder\Voiture\PimpMyRide\PareChocs\PareChocsMamouth());

$mechanteVoiture2 = new \Creation\Builder\Voiture\Builder2\Voiture($builder2);


var_dump($mechanteVoiture2);
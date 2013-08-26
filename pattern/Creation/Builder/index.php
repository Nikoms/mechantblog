<?php

include '../../autoload.php';

$builder = new \Creation\Builder\Voiture\CitroenBuilder();
$director = new \Creation\Builder\Voiture\Director($builder);
$voitureCitroen = $director->getVoiture();

var_dump($voitureCitroen);


$builderCustom = new \Creation\Builder\Voiture\VoitureBuilderFullCustom();
$builderCustom
    ->setMarque('Mechante marque')
    ->setRoues(new \Creation\Builder\Voiture\PimpMyRide\Roue\RoueEclair())
    ->setVitesseMax(200)
    ->setResistance(200)
    ->setPareChocs(new \Creation\Builder\Voiture\PimpMyRide\PareChocs\PareChocsMamouth());

$director = new \Creation\Builder\Voiture\Director($builderCustom);
$mechanteVoiture = $director->getVoiture();


var_dump($mechanteVoiture);
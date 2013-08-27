<?php

include '../../autoload.php';

$builder = new \Creation\Builder\Voiture\Builder1\CitroenBuilder();
$director = new \Creation\Builder\Voiture\Builder1\Director($builder);
$voitureCitroen = $director->getVoiture();

var_dump($voitureCitroen);


$builderCustom = new \Creation\Builder\Voiture\Builder1\VoitureBuilderFullCustom();
$builderCustom
    ->setMarque('Mechante marque')
    ->setRoues(new \Creation\Builder\Voiture\PimpMyRide\Roue\RoueEclair())
    ->setVitesseMax(200)
    ->setResistance(200)
    ->setPareChocs(new \Creation\Builder\Voiture\PimpMyRide\PareChocs\PareChocsMamouth());

$director = new \Creation\Builder\Voiture\Builder1\Director($builderCustom);
$mechanteVoiture = $director->getVoiture();


var_dump($mechanteVoiture);

echo '<hr />';

$builder2 = new Creation\Builder\Voiture\Builder2\VoitureBuilder();
$builder2
    ->setMarque('Mechante marque 2')
    ->setRoues(new \Creation\Builder\Voiture\PimpMyRide\Roue\RoueEclair())
    ->setVitesseMax(200)
    ->setResistance(200)
    ->setPareChocs(new \Creation\Builder\Voiture\PimpMyRide\PareChocs\PareChocsMamouth());

$mechanteVoiture2 = new \Creation\Builder\Voiture\Builder2\Voiture($builder2);


var_dump($mechanteVoiture2);
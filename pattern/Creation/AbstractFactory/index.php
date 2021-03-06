<?php

include '../../autoload.php';

//Old school
var_dump(\Creation\AbstractFactory\Voiture\BadIdea1\VoitureFactory::create('peugeot', '4x4'));
var_dump(\Creation\AbstractFactory\Voiture\BadIdea1\VoitureFactory::create('peugeot', 'course'));


var_dump(\Creation\AbstractFactory\Voiture\BadIdea1\VoitureFactory::create('citroen', '4x4'));
var_dump(\Creation\AbstractFactory\Voiture\BadIdea1\VoitureFactory::create('citroen', 'course'));


echo '<hr />';
//Avec le pattern Method Factory


var_dump(\Creation\AbstractFactory\Voiture\BadIdea2\VoitureCitroenFactory::create('4x4'));
var_dump(\Creation\AbstractFactory\Voiture\BadIdea2\VoiturePeugeotFactory::create('4x4'));

echo '<hr />';

$factory = new \Creation\AbstractFactory\Voiture\Peugeot\VoitureFactory();
var_dump($factory->createVoiture('course'));
var_dump($factory->createVoiture('4x4'));


$factory = new \Creation\AbstractFactory\Voiture\Citroen\VoitureFactory();
var_dump($factory->createVoiture('course'));
var_dump($factory->createVoiture('4x4'));


//C'est l'heure du ravitaillement, on change les pneus de la voiture:
$voiture = $factory->createVoiture('course');
//Je mets des roues
$voiture->setRoues($factory->createRoue());
<?php

include '../../autoload.php';


echo 'Vitesse neuve:' . Creation\FactoryMethod\Voiture\VoitureFactory::createVoiture('course')->getVitesseMax(
) . '<br />';
var_dump(Creation\FactoryMethod\Voiture\VoitureFactory::createVoiture('course'));
var_dump(Creation\FactoryMethod\Voiture\VoitureFactory::createVoiture('4x4'));
echo '<hr/>';


echo 'Vitesse OccasionV1:' . Creation\FactoryMethod\Voiture\VoitureOccasionV1Factory::createVoiture(
    'course'
)->getVitesseMax() . '<br />';
var_dump(Creation\FactoryMethod\Voiture\VoitureOccasionV1Factory::createVoiture('course'));
echo '<hr/>';

echo 'Vitesse OccasionV2:' . Creation\FactoryMethod\Voiture\VoitureOccasionV2Factory::createVoiture(
    'course'
)->getVitesseMax() . '<br />';
var_dump(Creation\FactoryMethod\Voiture\VoitureOccasionV2Factory::createVoiture('course'));


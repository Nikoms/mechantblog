<?php

include '../../autoload.php';

$race = new \Structure\Adapter\Framework\Race();
$race->addVoiture(new \Structure\Adapter\Framework\Voiture('Voiture1'));
$race->addVoiture(new \Structure\Adapter\Framework\Voiture('Voiture2'));
$race->addVoiture(new \Structure\Adapter\Framework\Voiture('Voiture3'));
$race->addVoiture(new \Structure\Adapter\Framework\Voiture('Voiture4'));
$race->addVoiture(new \Structure\Adapter\Framework\Voiture('Voiture5'));
$race->addVoiture(new \Structure\Adapter\Framework\Voiture('Voiture6'));
$race->addVoiture(new \Structure\Adapter\MyCode\VoitureBateau(new \Structure\Adapter\MyCode\Bateau('Bateau 1')));
$race->addVoiture(new \Structure\Adapter\MyCode\VoitureBateau(new \Structure\Adapter\MyCode\Bateau('Bateau 2')));

$race->start();

$race->exploseVoitureAuHasard();
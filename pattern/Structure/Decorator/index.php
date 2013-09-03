<?php
include '../../autoload.php';

echo '<pre>';

$voiture = new \Structure\Decorator\Voiture\Voiture("Normale");
$voiture->accelere();
$voiture->freine();


echo '<hr />';

$superVoiture = new \Structure\Decorator\Voiture\SuperVoitureDecorator(new \Structure\Decorator\Voiture\Voiture("Expérimentale"));
$superVoiture->accelere();
$superVoiture->freine();

echo '<hr />';


$superVoitureEtSabotee = new \Structure\Decorator\Voiture\VoitureSaboteeDecorator($superVoiture);
$superVoitureEtSabotee->accelere();
$superVoitureEtSabotee->freine();


echo '</pre>';

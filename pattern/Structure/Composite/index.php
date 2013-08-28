<?php
include '../../autoload.php';

$groupe1 = new \Structure\Composite\Voiture\Voitures('Groupe1');
$groupe1->add(new \Structure\Composite\Voiture\Voiture('Groupe1.Voiture1'));
$groupe1->add(new \Structure\Composite\Voiture\Voiture('Groupe1.Voiture2'));
$groupe1->add(new \Structure\Composite\Voiture\Voiture('Groupe1.Voiture3'));


$groupe2 = new \Structure\Composite\Voiture\Voitures('Groupe2');
$groupe2->add(new \Structure\Composite\Voiture\Voiture('Groupe2.Voiture1'));
$groupe2->add(new \Structure\Composite\Voiture\Voiture('Groupe2.Voiture2'));
$groupe2->add(new \Structure\Composite\Voiture\Voiture('Groupe2.Voiture3'));

$groupe3 = new \Structure\Composite\Voiture\Voitures('Groupe3');
$groupe31 = new \Structure\Composite\Voiture\Voitures('Groupe3.1');
$groupe31->add(new \Structure\Composite\Voiture\Voiture('Groupe3.1.Voiture1'));
$groupe31->add(new \Structure\Composite\Voiture\Voiture('Groupe3.1.Voiture2'));

$groupe32 = new \Structure\Composite\Voiture\Voitures('Groupe3.2');
$groupe32->add(new \Structure\Composite\Voiture\Voiture('Groupe3.2.Voiture1'));
$groupe32->add(new \Structure\Composite\Voiture\Voiture('Groupe3.2.Voiture2'));
$groupe32->add(new \Structure\Composite\Voiture\Voiture('Groupe3.3.Voiture2'));

$groupe3->add($groupe31);
$groupe3->add($groupe32);

$voitureSansGroupe = new \Structure\Composite\Voiture\Voiture('Voiture sans groupe');

$voitures = new \Structure\Composite\Voiture\Voitures('Toutes les voitures');
$voitures->add($groupe1);
$voitures->add($groupe2);
$voitures->add($groupe3);
$voitures->add($voitureSansGroupe);

$voitures->stop();
$voitures->explose();

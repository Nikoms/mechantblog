<?php
include '../../autoload.php';

$team1 = new \Comportement\ChainOfResponsibility\Voiture\Team1();
$team2 = new \Comportement\ChainOfResponsibility\Voiture\Team2();

$team1->setNext($team2);

$team1->machin('truc');
$team1->machin('chose');


//Fatal error, car personne ne la liste ne peut le gérer
$team1->machin('machin');


//Ex: Qui a fait ce développement? Qui prend en charge ce ticket
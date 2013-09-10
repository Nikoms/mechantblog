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

/**
 * Plusieurs objets peuvent répondre à une réquete, mais pas tous...
 * ... Mais on sait pas qui à priori
 * ... Seulement un répond
 * L'ensemble des personnes à qui on demande doit être créé dynamiquement
 *
 * appeleur et appelant ne se connaissent pas
 * ceux dans la chaine ne connaissent pas ceux appelés précédemment
 * Reception pas garantie
 *
 * Parfois utilisé avec composite
 *
 * Attention aux chaines brisées
 *
 * GoG ne renvoit rien, mais beaucoup aime au moins renvoyer un boolean pour savoir si l'action a été exacutée par quelqu'un.
 *
 *
 * meilleur moyen est d'avoir une abstract qui font le test pour savoir s'il y a un suivant, comme ca chaque objet fait uniquement ce qu'il doit et pas savoir qui est le suivant etc etc...
 *
 *
 * Reception emails > spam > si pas spam > save in box
 * Liste des tours avec état de la voiture: trouve moi le premier tour qui a casser la voiture...
 */
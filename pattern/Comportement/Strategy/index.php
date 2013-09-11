<?php

$strategy1 = new \Comportement\Strategy\Voiture\Strategy\Strategy1();
$strategy2 = new \Comportement\Strategy\Voiture\Strategy\Strategy2();

$exemple = new \Structure\Strategy\Exemple($strategy1);

$exemple->allo('coucou');



$exemple = new \Structure\Strategy\Exemple($strategy2);

$exemple->allo('coucou');


/**
 * Une requete peut etre faite de plusieurs manière (algo)
 * ALgo peuvent augmenter avec e temps
 * Algos à des temps différent. On ne veut pas avoir à gérer des algos trop qu'on utilise plus ni meme les voir dans le code
 * Difficile d'en a jouter ou d'en modifier sans trop d'impact
 *
 *
 * différente implémentation pour le meme but
 * LE client doit connaitre les stratégies et connait les problemes/atouts de chacun
 * Il se peut que tous les params ne soient pas utilisés donc...
 *
 * LE contexte peut se donner à sa stratégie, mais du coup, ca lie plus fortement les 2...
 * On peut mettre une stratégie par défaut
 */
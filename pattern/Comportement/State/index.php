<?php
/**
 * Created by PhpStorm.
 * User: Nikoms
 * Date: 11/09/13
 * Time: 1:38
 */


/**
 * Changer un comportement en fonction d'un état.
 * CHangement d'état à chaud, et il faut changer son comportement
 * beaucoup de if/else en fonction d'un état.
 * UN état une constante
 * AJout d'état facile
 * Le contexte peut se passer à son état pour que celui ci puisse utliliser les méthodes public. (en général ca fonctionne comme ca)
 * Le client travaille avec le context jamais l'état
 * Augmentation du nombre de classe plutot qu'un truc compact... Mais pas si grave, c'est mieux que du if/else
 * transition d'un état à un autre plus explicite
 * L'état est dans une variable et pas plusieurs (ex: il est 16h et il fait beau => BelleAresMidiEnsoleillée)
 * Le contexte  ou l'état peuvent changer l'état du contexte. Le faire dans la classe état c'est bien, mais du coup un état doit connaitre un autre (déoendence!). Mais c'est sans doute plus simple et plus flexible
 *
 *
 *
 */
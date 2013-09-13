<?php
/**
 * Created by PhpStorm.
 * User: Nikoms
 * Date: 11/09/13
 * Time: 20:13
 */

/**
 * Lié des objets entre eux.
 * Ex : field qui change la liste d'un autre ou bien field qui rend un bouton readonly, etc...
 * Intermediaire
 * Les objets ont juste une interaction avec le médiateur = moins d'interactions = moins de couplage
 * hub communication
 *
 * Utilisé si ensemble d'objets communiquent entre eux de manière précise mais complexe => Structure difficile à comprendre
 * Réutiliser un objet est compliqué s'il dépend de trop de monde
 * Facilement cutomizable en faisant des sous classes
 *
 * Mediator => interface de communication : widgetChanged(Field)
 * ConcreteMediator
 * FIeld => $this->getMediator()->widgetChanged($this);
 *
 *
 * + Pas trop de subclass car centralisé
 * Changer et réutiliser le médiateur et ses collègues indépendamment
 * Simplifie le protocole simplifié : remplace le many to many en one to many plus facile à maintenir et extender
 *
 */
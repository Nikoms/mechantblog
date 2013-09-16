<?php

include '../../autoload.php';

$subject = new \Comportement\Observer\Voiture\Subject('Voiture 1');
$observer1 = new \Comportement\Observer\Voiture\Observer();
$observer2 = new \Comportement\Observer\Voiture\Observer();


$subject->attach($observer1);
$subject->attach($observer2);

$subject->setName('Voiture 2');
$subject->setName('Voiture 2');


$subject->setName('Voiture 3');


/**
 * Observer + Mediator = Encore mieux => EventDispatcher
 *
 *
 *
 *
 */
<?php
namespace Creation\FactoryMethod\Voiture;

use Creation\Common\Voiture\Voiture;

/**
 * Notre classe abstraite indique que toutes les fabriques renverrons un objet de type Voiture lorsqu'on appelle le "createVoiture"
 * Class AVoitureFactory
 * @package FactoryMethod\Voiture
 */
abstract class AVoitureFactory
{
    /**
     * @param $type
     * @return Voiture
     * @throws \Exception
     */
    static abstract public function createVoiture($type);
}
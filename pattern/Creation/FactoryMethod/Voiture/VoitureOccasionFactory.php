<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 10/08/13
 * Time: 15:36
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\FactoryMethod\Voiture;


use Creation\Common\Voiture\PareChocs;

class VoitureOccasionV2Factory extends VoitureFactory
{

    public static function createVoiture($type)
    {
        $voiture = parent::createVoiture($type);
        //On tape un peu dessus!
        $voiture->accident(20);
        return $voiture;
    }


}
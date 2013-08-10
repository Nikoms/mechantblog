<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 10/08/13
 * Time: 15:42
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\FactoryMethod\Voiture;


use Creation\Common\Voiture\Occasion\VoitureRapideOccasion;
use Creation\Common\Voiture\Occasion\VoitureToutTerrainOccasion;

class VoitureOccasionV1Factory extends VoitureFactory
{

    public static function createVoiture($type)
    {

        switch ($type) {
            default:
                throw new \Exception('Nop');
                break;
            case '4x4':
                $voiture = new VoitureToutTerrainOccasion();
                break;
            case 'course':
                $voiture = new VoitureRapideOccasion();
                break;
        }

        return static::construit($voiture);
    }

}
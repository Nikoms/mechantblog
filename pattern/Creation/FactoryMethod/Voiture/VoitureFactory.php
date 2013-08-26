<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:40
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\FactoryMethod\Voiture;

use Creation\Common\Voiture\PareChocs;
use Creation\Common\Voiture\Roue;
use Creation\Common\Voiture\Voiture;
use Creation\Common\Voiture\VoitureRapide;
use Creation\Common\Voiture\VoitureToutTerrain;

class VoitureFactory extends AVoitureFactory
{
    /**
     * @param $type
     * @return VoitureRapide|VoitureToutTerrain
     * @throws \Exception
     */
    static public function createVoiture($type)
    {
        switch ($type) {
            default:
                throw new \Exception('Nop');
                break;
            case '4x4':
                $voiture = new VoitureToutTerrain();
                break;
            case 'course':
                $voiture = new VoitureRapide();
                break;
        }

        return static::build($voiture);
    }

    static protected function build(Voiture $voiture)
    {

        //Les voitures ont toutes un taux d'absorption de 50
        $voiture->setParChocs(new PareChocs(50));
        //Les voitures ont toutes des les mêmes roues
        $voiture->setRoues(new Roue());

        return $voiture;
    }

}

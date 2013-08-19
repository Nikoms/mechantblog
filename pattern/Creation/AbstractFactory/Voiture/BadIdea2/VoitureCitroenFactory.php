<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 19/08/13
 * Time: 22:45
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\AbstractFactory\Voiture\BadIdea2;


use Creation\AbstractFactory\Voiture\Citroen\RoueCitroen;
use Creation\Common\Voiture\PareChocs;

class VoitureCitroenFactory extends VoitureFactory
{
    /**
     * @param string $type
     * @return \Creation\AbstractFactory\Voiture\Citroen\VoitureRapide|\Creation\AbstractFactory\Voiture\Citroen\VoitureToutTerrain
     * @throws \Exception
     */
    static public function create($type)
    {
        switch ($type) {
            default:
                throw new \Exception('Nop');
                break;
            case '4x4':
                $voiture = new \Creation\AbstractFactory\Voiture\Citroen\VoitureToutTerrain();
                break;
            case 'course':
                $voiture = new \Creation\AbstractFactory\Voiture\Citroen\VoitureRapide();
                break;
        }
        //Les parechocs de citroen sont plus résistants
        $voiture->setParChocs(new PareChocs(60));


        //On rajoute le par chocs
        $voiture->setRoues(self::createRoute());

        return $voiture;
    }

    /**
     * @return RoueCitroen
     */
    static public function createRoute()
    {
        return new RoueCitroen();
    }


}
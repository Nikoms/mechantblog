<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 19/08/13
 * Time: 22:45
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\AbstractFactory\Voiture\BadIdea2;


use Creation\AbstractFactory\Voiture\Peugeot\RouePeugeot;
use Creation\Common\Voiture\PareChocs;

class VoiturePeugeotFactory extends VoitureFactory
{
    /**
     * @param string $type
     * @return \Creation\AbstractFactory\Voiture\Peugeot\VoitureRapide|\Creation\AbstractFactory\Voiture\Peugeot\VoitureToutTerrain
     * @throws \Exception
     */
    static public function create($type)
    {
        switch ($type) {
            default:
                throw new \Exception('Nop');
                break;
            case '4x4':
                $voiture = new \Creation\AbstractFactory\Voiture\Peugeot\VoitureToutTerrain();
                break;
            case 'course':
                $voiture = new \Creation\AbstractFactory\Voiture\Peugeot\VoitureRapide();
                break;
        }
        //Les parechocs de peugeot sont moins résistants
        $voiture->setParChocs(new PareChocs(40));


        //On rajoute le par chocs
        $voiture->setRoues(self::createRoute());

        return $voiture;
    }

    /**
     * @return RouePeugeot
     */
    static public function createRoute()
    {
        return new RouePeugeot();
    }


}
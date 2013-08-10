<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:40
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\AbstractFactory\Voiture;


use Creation\AbstractFactory\Voiture\Citroen\RoueCitroen;
use Creation\AbstractFactory\Voiture\Peugeot\RouePeugeot;
use Creation\Common\Voiture\PareChocs;
use Creation\Common\Voiture\Roue;

class VoitureFactoryBad
{
    /**
     * @param $marque
     * @param $type
     * @return Voiture
     * @throws \Exception
     */
    static public function create($marque, $type)
    {
        $voiture = null;

        if ($marque === 'peugeot') {
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
            $voiture->setRoues(new RouePeugeot());

        } else {
            if ($marque === 'citroen') {
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

                //Les parechocs de peugeot sont moins résistants
                $voiture->setParChocs(new PareChocs(60));
                $voiture->setRoues(new RoueCitroen());

            }
        }

        return $voiture;
    }
}
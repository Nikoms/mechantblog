<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:40
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\AbstractFactory\Voiture\BadIdea1;


use Creation\AbstractFactory\Voiture\Citroen\RoueCitroen;
use Creation\AbstractFactory\Voiture\Peugeot\RouePeugeot;
use Creation\Common\Voiture\PareChocs;

class VoitureFactory
{
    /**
     * @param string $marque
     * @param string $type
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

                //Les parechocs de citroen sont plus résistants
                $voiture->setParChocs(new PareChocs(60));

            }
        }

        //Youpie du code en commun!
        $voiture->setRoues(self::createRoue($marque));

        return $voiture;
    }

    /**
     * On veut pouvoir donner des roues "en standalone" selon la marque de voiture... Lors du ravitaillement par exemple
     * @param string $marque
     * @return RoueCitroen|RouePeugeot
     */
    static public function createRoue($marque)
    {
        if ($marque === 'peugeot') {
            return new RouePeugeot();
        } else {
            return new RoueCitroen();
        }
    }
}
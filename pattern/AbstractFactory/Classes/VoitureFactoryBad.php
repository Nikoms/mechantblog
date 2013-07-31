<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:40
 * To change this template use File | Settings | File Templates.
 */

namespace AbstractFactory\Classes;


class VoitureFactoryBad
{
    static public function create($marque, $type)
    {
        $voiture = null;

        if ($marque === 'peugeot') {
            switch ($type) {
                default:
                    throw new \Exception('Nop');
                    break;
                case '4x4':
                    $voiture = new \AbstractFactory\Classes\Peugeot\VoitureToutTerrain();
                    break;
                case 'course':
                    $voiture = new \AbstractFactory\Classes\Peugeot\VoitureRapide();
                    break;
            }

            $voiture->setParChocs(new PareChocs(40));
            $voiture->setRoues(new Roue());

        } else {
            if ($marque === 'citroen') {
                switch ($type) {
                    default:
                        throw new \Exception('Nop');
                        break;
                    case '4x4':
                        $voiture = new \AbstractFactory\Classes\Citroen\VoitureToutTerrain();
                        break;
                    case 'course':
                        $voiture = new \AbstractFactory\Classes\Citroen\VoitureRapide();
                        break;
                }

                $voiture->setParChocs(new PareChocs(60));
                $voiture->setRoues(new Roue());

            }
        }

        return $voiture;
    }
}
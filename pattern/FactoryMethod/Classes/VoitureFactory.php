<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:40
 * To change this template use File | Settings | File Templates.
 */

namespace FactoryMethod\Classes;

class VoitureFactory
{
    static public function create($type)
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
        $voiture->setParChocs(self::createPareChoc(50));
        $voiture->setRoues(self::createRoue());

        return $voiture;
    }

    static private function createPareChoc($tauxAbsorption)
    {
        return new PareChocs($tauxAbsorption);
    }

    static private function createRoue()
    {
        return new Roue();
    }
}
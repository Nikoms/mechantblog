<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:40
 * To change this template use File | Settings | File Templates.
 */

namespace AbstractFactory\Classes;

abstract class VoitureFactory
{


    public function createPareChocs($tauxAbsorption)
    {
        return new PareChocs($tauxAbsorption);
    }

    public function createRoue()
    {
        return new Roue();
    }


    /**
     * @return Voiture
     */
    abstract public function createVoitureRapide();

    /**
     * @return Voiture
     */
    abstract public function createVoitureToutTerrain();
}
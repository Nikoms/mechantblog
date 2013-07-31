<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:40
 * To change this template use File | Settings | File Templates.
 */

namespace AbstractFactory\Classes\Citroen;

class VoitureFactory extends \AbstractFactory\Classes\VoitureFactory
{


    public function createVoitureRapide()
    {
        return new VoitureRapide($this);
    }

    public function createVoitureToutTerrain()
    {
        return new VoitureToutTerrain($this);
    }
}
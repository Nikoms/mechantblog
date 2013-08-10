<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:40
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\AbstractFactory\Voiture\Peugeot;

use Creation\AbstractFactory\Voiture\AVoitureFactory;
use Creation\Common\Voiture\Voiture as BaseVoiture;

class VoitureFactory extends AVoitureFactory
{

    protected function initParChocs(BaseVoiture $voiture)
    {
        $voiture->setParChocs($this->createPareChocs(60));
    }


    protected function createVoitureRapide()
    {
        return new VoitureRapide();
    }

    protected function createVoitureToutTerrain()
    {
        return new VoitureToutTerrain();
    }

    /**
     * @return \Creation\Common\Voiture\Roue
     */
    public function createRoue()
    {
        return new RouePeugeot();
    }


}
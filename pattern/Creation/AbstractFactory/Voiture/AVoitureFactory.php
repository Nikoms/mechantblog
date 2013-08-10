<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:40
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\AbstractFactory\Voiture;

use Creation\Common\Voiture\PareChocs;
use Creation\Common\Voiture\Voiture;

abstract class AVoitureFactory
{

    abstract protected function initParChocs(Voiture $voiture);



    public function createVoiture($type)
    {
        switch ($type) {
            default:
                throw new \Exception('Nop');
                break;
            case '4x4':
                $voiture = $this->createVoitureToutTerrain();
                break;
            case 'course':
                $voiture = $this->createVoitureRapide();
                break;
        }
        $this->initParChocs($voiture);
        $voiture->setRoues($this->createRoue());

        return $voiture;
    }


    public function createPareChocs($tauxAbsorption)
    {
        return new PareChocs($tauxAbsorption);
    }

    /**
     * @return \Creation\Common\Voiture\Roue
     */
    abstract public function createRoue();


    /**
     * @return \Creation\Common\Voiture\Voiture
     */
    abstract protected function createVoitureRapide();

    /**
     * @return \Creation\Common\Voiture\Voiture
     */
    abstract protected function createVoitureToutTerrain();
}
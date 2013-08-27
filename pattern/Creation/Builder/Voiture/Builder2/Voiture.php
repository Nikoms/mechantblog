<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 27/08/13
 * Time: 22:28
 * To change this template use File | Settings | File Templates.
 */
namespace Creation\Builder\Voiture\Builder2;

use Creation\Common\Voiture\Voiture as VoitureBasic;

class Voiture extends VoitureBasic
{

    private $vitesseMax;
    private $resistance;

    public function __construct(VoitureBuilder $builder)
    {
        $this->setMarque($builder->getMarque());
        $this->setParChocs($builder->getPareChocs());
        $this->setRoues($builder->getRoues());
        $this->setVitesseMax($builder->getVitesseMax());
        $this->setResistance($builder->getResistance());
    }

    public function getVitesseMax()
    {
        return $this->vitesseMax;
    }

    public function getResistance()
    {
        return $this->resistance;
    }

    /**
     * @param mixed $vitesseMax
     */
    public function setVitesseMax($vitesseMax)
    {
        $this->vitesseMax = $vitesseMax;
    }

    /**
     * @param mixed $resistance
     */
    public function setResistance($resistance)
    {
        $this->resistance = $resistance;
    }


}
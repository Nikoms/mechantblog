<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 27/08/13
 * Time: 22:30
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\Builder\Voiture\Builder2;


use Creation\Common\Voiture\PareChocs;
use Creation\Common\Voiture\Roue;

class VoitureBuilder
{

    private $vitesseMax;
    private $pareChocs;
    private $roues;
    private $resistance;
    private $marque;


    public function __construct()
    {

    }

    /**
     * @param $marque
     * @return $this
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param PareChocs $pareChocs
     * @return $this
     */
    public function setPareChocs(PareChocs $pareChocs)
    {
        $this->pareChocs = $pareChocs;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPareChocs()
    {
        return $this->pareChocs;
    }

    /**
     * @param $resistance
     * @return $this
     */
    public function setResistance($resistance)
    {
        $this->resistance = $resistance;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResistance()
    {
        return $this->resistance;
    }

    /**
     * @param Roue $roues
     * @return $this
     */
    public function setRoues(Roue $roues)
    {
        $this->roues = $roues;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoues()
    {
        return $this->roues;
    }

    /**
     * @param $vitesseMax
     * @return $this
     */
    public function setVitesseMax($vitesseMax)
    {
        $this->vitesseMax = $vitesseMax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVitesseMax()
    {
        return $this->vitesseMax;
    }


}
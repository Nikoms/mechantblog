<?php
/**
 * @author Nicolas De Boose
 */

namespace Creation\Builder\Voiture\Builder1;


class VoitureBuilderFullCustom extends VoitureBuilder
{

    private $resistance;
    private $vitesseMax;
    private $pareChocs;
    private $roues;
    private $marque;

    public function buildResistance()
    {
        $this->voiture->setResistance($this->resistance);
    }

    public function buildVitesseMax()
    {
        $this->voiture->setVitesseMax($this->vitesseMax);
    }

    public function buildPareChocs()
    {
        $this->voiture->setParChocs($this->pareChocs);
    }

    public function buildRoues()
    {
        $this->voiture->setRoues($this->roues);
    }

    public function buildMarque()
    {
        $this->voiture->setMarque($this->marque);
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;
        return $this;
    }

    public function setPareChocs($pareChocs)
    {
        $this->pareChocs = $pareChocs;
        return $this;
    }

    public function setResistance($resistance)
    {
        $this->resistance = $resistance;
        return $this;
    }

    public function setRoues($roues)
    {
        $this->roues = $roues;
        return $this;
    }

    public function setVitesseMax($vitesseMax)
    {
        $this->vitesseMax = $vitesseMax;
        return $this;
    }


}
<?php

namespace Creation\Builder\Voiture\Builder1;


abstract class VoitureBuilder
{

    protected $voiture;

    public function __construct()
    {
        $this->voiture = new VoitureAssemblee();
    }

    abstract public function buildResistance();

    abstract public function buildVitesseMax();

    abstract public function buildPareChocs();

    abstract public function buildRoues();

    abstract public function buildMarque();

    public function getVoiture()
    {
        return $this->voiture;
    }


}
<?php
/**
 * @author Nicolas De Boose
 */

namespace Creation\Builder\Voiture\Builder1;

use Creation\AbstractFactory\Voiture\Peugeot\RouePeugeot;
use Creation\Common\Voiture\PareChocs;

class PeugeotBuilder extends VoitureBuilder
{
    public function buildResistance()
    {
        $this->voiture->setResistance(120);
    }

    public function buildVitesseMax()
    {
        $this->voiture->setVitesseMax(110);
    }

    public function buildPareChocs()
    {
        $this->voiture->setParChocs(new PareChocs(70));
    }

    public function buildRoues()
    {
        $this->voiture->setRoues(new RouePeugeot());
    }

    public function buildMarque()
    {
        $this->voiture->setMarque('Peugeot');
    }


}
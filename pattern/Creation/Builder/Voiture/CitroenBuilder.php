<?php
/**
 * @author Nicolas De Boose
 */

namespace Creation\Builder\Voiture;


use Creation\AbstractFactory\Voiture\Citroen\RoueCitroen;
use Creation\Common\Voiture\PareChocs;

class CitroenBuilder extends VoitureBuilder{
    public function buildResistance()
    {
        $this->voiture->setResistance(100);
    }

    public function buildVitesseMax()
    {
        $this->voiture->setVitesseMax(120);
    }

    public function buildPareChocs()
    {
        $this->voiture->setParChocs(new PareChocs(50));
    }

    public function buildRoues()
    {
        $this->voiture->setRoues(new RoueCitroen());
    }

    public function buildMarque()
    {
        $this->voiture->setMarque('Citroen');
    }


}
<?php
/**
 * @author Nicolas De Boose
 */

namespace Creation\Builder\Voiture;


class Director {

    private $voitureBuilder;

    public function __construct(VoitureBuilder $voitureBuilder){
        $this->voitureBuilder = $voitureBuilder;
    }

    public function getVoiture(){
        $this->voitureBuilder->buildMarque();
        $this->voitureBuilder->buildPareChocs();
        $this->voitureBuilder->buildResistance();
        $this->voitureBuilder->buildRoues();
        $this->voitureBuilder->buildVitesseMax();

        return $this->voitureBuilder->getVoiture();
    }

}
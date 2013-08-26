<?php
/**
 * User: Nicolas De Boose
 * Date: 26/08/13
 * Time: 23:29
 */

namespace Creation\Builder\Voiture;


use Creation\Common\Voiture\Voiture;

class VoitureAssemblee extends Voiture
{

    private $vitesseMax;
    private $resistance;

    public function setVitesseMax($vitesseMax)
    {
        $this->vitesseMax = $vitesseMax;
    }

    public function getVitesseMax()
    {
        return $this->vitesseMax;
    }

    public function setResistance($resistance)
    {
        $this->resistance = $resistance;
    }

    public function getResistance()
    {
        return $this->resistance;
    }


}
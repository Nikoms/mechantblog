<?php
/**
 * @author Nicolas De Boose
 */

namespace Structure\Decorator\Voiture;


abstract class VoitureDecorator implements IVoiture
{

    private $voiture;

    public function __construct(IVoiture $voiture)
    {
        $this->voiture = $voiture;
    }

    protected function getVoiture()
    {
        return $this->getVoiture();
    }

    public function accelere()
    {
        $this->voiture->accelere();
    }

    public function freine()
    {
        $this->voiture->freine();
    }


}
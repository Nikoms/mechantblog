<?php
/**
 * @author Nicolas De Boose
 */

namespace Comportement\Visitor\Voiture\Pneu;


use Comportement\Visitor\Voiture\Meteo\IVisitor;

class Pneu2 implements IVisitable
{

    public function accept(IVisitor $visitor)
    {
        return $visitor->visit($this);
    }

    public function getAdherence()
    {
        return 50;
    }


}
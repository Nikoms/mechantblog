<?php
/**
 * @author Nicolas De Boose
 */

namespace Comportement\Visitor\Voiture\Pneu;


use Comportement\Visitor\Voiture\Meteo\IVisitor;

class Pneu1 implements IVisitable
{

    public function accept(IVisitor $visitor)
    {
        return $visitor->visit($this);
    }

    public function getAdherence()
    {
        return 100;
    }


}
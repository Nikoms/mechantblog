<?php
/**
 * @author Nicolas De Boose
 */

namespace Comportement\Visitor\Voiture\Meteo;


use Comportement\Visitor\Voiture\Meteo\AVisitor;
use Comportement\Visitor\Voiture\Pneu\Pneu1;
use Comportement\Visitor\Voiture\Pneu\Pneu2;

class PluieVisitor extends AVisitor
{

    public function visitPneu1(Pneu1 $visitable)
    {
        return $visitable->getAdherence() + 6;
    }

    public function visitPneu2(Pneu2 $visitable)
    {
        return $visitable->getAdherence() - 6;
    }


}
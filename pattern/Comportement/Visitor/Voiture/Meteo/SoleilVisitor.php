<?php
/**
 * @author Nicolas De Boose
 */

namespace Comportement\Visitor\Voiture\Meteo;


use Comportement\Visitor\Voiture\Pneu\Pneu1;
use Comportement\Visitor\Voiture\Pneu\Pneu2;

class SoleilVisitor extends AVisitor
{

    public function visitPneu1(Pneu1 $visitable)
    {
        return $visitable->getAdherence() + 13;
    }

    public function visitPneu2(Pneu2 $visitable)
    {
        return $visitable->getAdherence() - 13;
    }


}
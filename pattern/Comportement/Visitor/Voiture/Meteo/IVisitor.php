<?php
/**
 * @author Nicolas De Boose
 */

namespace Comportement\Visitor\Voiture\Meteo;


use Comportement\Visitor\Voiture\Pneu\IVisitable;
use Comportement\Visitor\Voiture\Pneu\Pneu1;
use Comportement\Visitor\Voiture\Pneu\Pneu2;

interface IVisitor
{
    public function visit(IVisitable $visitable);

    public function visitPneu1(Pneu1 $visitable);

    public function visitPneu2(Pneu2 $visitable);
}
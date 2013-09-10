<?php
/**
 * @author Nicolas De Boose
 */

namespace Comportement\Visitor\Voiture\Meteo;


use Comportement\Visitor\Voiture\Pneu\IVisitable;

abstract class AVisitor implements IVisitor
{
    public function visit(IVisitable $visitable)
    {
        if (get_class($visitable) === 'Comportement\Visitor\Voiture\Pneu\Pneu1') {
            return $this->visitPneu1($visitable);
        }

        if (get_class($visitable) === 'Comportement\Visitor\Voiture\Pneu\Pneu2') {
            return $this->visitPneu2($visitable);
        }

        throw new \Exception('No pneu!');
    }


}
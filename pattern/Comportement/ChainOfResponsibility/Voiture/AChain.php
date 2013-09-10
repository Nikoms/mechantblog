<?php
/**
 * @author Nicolas De Boose
 */

namespace Comportement\ChainOfResponsibility\Voiture;


abstract class AChain implements IChain
{

    private $next;

    public function setNext(IChain $next)
    {
        $this->next = $next;
    }

    protected function getNext()
    {
        return $this->next;
    }

}
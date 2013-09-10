<?php
/**
 * @author Nicolas De Boose
 */

namespace Comportement\ChainOfResponsibility\Voiture;


interface IChain
{
    public function setNext(IChain $chain);

    public function machin($truc);
}
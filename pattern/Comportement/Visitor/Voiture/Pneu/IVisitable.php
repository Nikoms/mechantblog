<?php
/**
 * @author Nicolas De Boose
 */

namespace Comportement\Visitor\Voiture\Pneu;


use Comportement\Visitor\Voiture\Meteo\IVisitor;

interface IVisitable
{
    public function accept(IVisitor $visitor);

    public function getAdherence();
}
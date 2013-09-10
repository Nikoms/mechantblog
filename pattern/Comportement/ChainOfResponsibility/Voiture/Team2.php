<?php
/**
 * @author Nicolas De Boose
 */

namespace Comportement\ChainOfResponsibility\Voiture;


class Team2 extends AChain
{
    public function machin($truc)
    {
        if ($truc == 'chose') {
            echo 'Team2 mine!';
        } else {
            $this->getNext()->machin($truc);
        }
    }

}
<?php
/**
 * @author Nicolas De Boose
 */

namespace Comportement\ChainOfResponsibility\Voiture;


class Team1 extends AChain
{
    public function machin($truc)
    {
        if ($truc == 'truc') {
            echo 'Team1 mine!';
        } else {
            $this->getNext()->machin($truc);
        }
    }

}
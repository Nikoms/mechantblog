<?php
/**
 * @author Nicolas De Boose
 */

namespace Structure\Decorator\Voiture;


class SuperVoitureDecorator extends VoitureDecorator
{


    public function accelere()
    {
        //Toujours faire appel au parent
        parent::accelere();
        $this->boost();
    }

    private function boost()
    {
        echo 'Encore un petit boost ' . PHP_EOL;
    }


}
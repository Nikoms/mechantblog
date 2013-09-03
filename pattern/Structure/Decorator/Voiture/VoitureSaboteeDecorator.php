<?php
/**
 * @author Nicolas De Boose
 */

namespace Structure\Decorator\Voiture;


class VoitureSaboteeDecorator extends VoitureDecorator
{


    public function accelere()
    {
        //Toujours faire appel au parent
        parent::accelere();
        //quand on accelere, on freine aussi
        $this->freine();
    }

    public function freine()
    {
        //On freine deux fois plus
        parent::freine();
        parent::freine();
    }


}
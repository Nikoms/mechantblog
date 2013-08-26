<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:39
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\AbstractFactory\Voiture\Peugeot;

class VoitureRapide extends \Creation\Common\Voiture\VoitureRapide
{

    public function __construct(){
        parent::__construct();
        $this->setMarque('Peugeot');
    }

    function getVitesseMax()
    {
        return parent::getVitesseMax() + 10;
    }

    function getResistance()
    {
        return parent::getResistance() - 10;
    }
}
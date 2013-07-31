<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:39
 * To change this template use File | Settings | File Templates.
 */

namespace AbstractFactory\Classes\Peugeot;

class VoitureRapide extends Voiture
{
    function getVitesseMax()
    {
        return 160;
    }

    function getResistance()
    {
        return 40;
    }
}
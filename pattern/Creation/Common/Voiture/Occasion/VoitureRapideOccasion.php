<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:39
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\Common\Voiture\Occasion;


use Creation\Common\Voiture\VoitureRapide;

class VoitureRapideOccasion extends VoitureRapide
{
    function getVitesseMax()
    {
        return 120;
    }

    function getResistance()
    {
        return 40;
    }
}
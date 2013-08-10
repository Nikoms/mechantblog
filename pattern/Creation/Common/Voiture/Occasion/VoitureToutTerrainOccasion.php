<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:39
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\Common\Voiture\Occasion;


use Creation\Common\Voiture\VoitureToutTerrain;

class VoitureToutTerrainOccasion extends VoitureToutTerrain
{
    function getVitesseMax()
    {
        return 80;
    }

    function getResistance()
    {
        return 150;
    }

}
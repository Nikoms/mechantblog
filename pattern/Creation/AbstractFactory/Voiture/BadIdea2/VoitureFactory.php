<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:40
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\AbstractFactory\Voiture\BadIdea2;


abstract class VoitureFactory
{
    /**
     * Renvoi la voiture selon le type
     * @param string $type
     * @return Voiture
     */
    abstract static public function create($type);

    /**
     * On veut pouvoir donner des roues "en standalone" selon la marque de voiture... Lors du ravitaillement par exemple
     * @return Roue
     */
    abstract static public function createRoute();
}
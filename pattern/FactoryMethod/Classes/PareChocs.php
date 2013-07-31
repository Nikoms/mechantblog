<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 18/07/13
 * Time: 23:38
 * To change this template use File | Settings | File Templates.
 */

namespace FactoryMethod\Classes;


class PareChocs
{
    //Un pare chox prend la moitié des coups
    public $tauxAbsorption;

    public function __construct($tauxAbsorption){
        $this->tauxAbsorption = $tauxAbsorption;
    }

}
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 10/08/13
 * Time: 17:45
 * To change this template use File | Settings | File Templates.
 */

namespace Creation\AbstractFactory\Voiture\Citroen;


use Creation\Common\Voiture\Roue;

class RoueCitroen extends Roue{

    public function __construct(){
        parent::__construct();
        $this->life *= 1.2;
    }
}
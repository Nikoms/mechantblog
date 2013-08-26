<?php

namespace Creation\Builder\Voiture\PimpMyRide\Roue;

use Creation\Common\Voiture\Roue;

class RoueEclair extends Roue
{

    public function __construct()
    {
        $this->life = 200;
    }
}
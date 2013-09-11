<?php
/**
 * Created by PhpStorm.
 * User: Nikoms
 * Date: 10/09/13
 * Time: 21:34
 */

namespace Comportement\Strategy\Voiture\Strategy;


class Strategy2 implements IStrategy {
    public function connect($config)
    {

        echo $config. ' 2';
    }

    public function query($query)
    {
        // TODO: Implement query() method.
    }
} 
<?php
/**
 * Created by PhpStorm.
 * User: Nikoms
 * Date: 10/09/13
 * Time: 21:34
 */

namespace Comportement\Strategy\Voiture\Strategy;


interface IStrategy {

    public function connect($config);
    public function query($query);
} 
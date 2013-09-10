<?php
/**
 * Created by PhpStorm.
 * User: Nikoms
 * Date: 10/09/13
 * Time: 21:46
 */

namespace Structure\Strategy;


use Comportement\Strategy\Voiture\Strategy\IStrategy;

class Exemple{

    private $strategy;

    public function __construct(IStrategy $strategy){
        $this->strategy = $strategy;
    }

    public function allo($config)
    {
        $this->strategy->connect($config);
    }



} 
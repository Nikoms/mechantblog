<?php
namespace AbstractFactory\Classes\Peugeot;

abstract class Voiture extends \AbstractFactory\Classes\Voiture
{
    public function prepare()
    {
        $this->setParChocs($this->factory->createPareChocs(40));
    }
}
<?php
namespace AbstractFactory\Classes\Citroen;

abstract class Voiture extends \AbstractFactory\Classes\Voiture
{
    public function prepare()
    {
        $this->setParChocs($this->factory->createPareChocs(60));
    }

}
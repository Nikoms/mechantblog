<?php
/**
 * @author Nicolas De Boose
 */

namespace Structure\Proxy\Voiture;


class Voiture implements IVoiture
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function accelere()
    {
        echo "La voiture '" . $this->name . "' accelere" . PHP_EOL;
    }

    public function freine()
    {
        echo "La voiture '" . $this->name . "' freine" . PHP_EOL;
    }

}
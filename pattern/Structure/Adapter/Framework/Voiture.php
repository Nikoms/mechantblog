<?php
/**
 * @author Nicolas De Boose
 */

namespace Structure\Adapter\Framework;


class Voiture implements IVoiture
{

    private $name;
    private $vitesse = 0;
    private $embrayage = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function avance()
    {
        echo "La voiture '" . $this->name . "' roule à une allure de " . $this->vitesse . " km/h" . PHP_EOL;
    }

    public function changeRoues()
    {
        echo "La voiture '" . $this->name . "' change ses roues" . PHP_EOL;
    }

    public function accelere()
    {
        //Accélération au hasard
        $this->vitesse += rand(1, 5);
        echo "La voiture '" . $this->name . "' accèlère à  " . $this->vitesse . " km/h" . PHP_EOL;
    }

    public function embraye($embrayage)
    {
        $this->embrayage = $embrayage;
        echo "La voiture '" . $this->name . "' embraye sur " . $this->embrayage . PHP_EOL;
    }

    public function explose()
    {
        echo "La voiture '" . $this->name . "' explose :(" . PHP_EOL;
    }
}
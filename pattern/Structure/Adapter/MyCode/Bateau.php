<?php
/**
 * @author Nicolas De Boose
 */

namespace Structure\Adapter\MyCode;


class Bateau implements IBateau
{

    private $name;
    private $vitesse;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function coule()
    {
        echo "Le bateau '" . $this->name . "' coule" . PHP_EOL;
    }

    public function avance()
    {
        echo "Le bateau '" . $this->name . "' avance à une allure de " . $this->vitesse . " km/h" . PHP_EOL;
    }

    public function accelere()
    {
        //Petite acceleration
        $this->vitesse++;
        echo "Le bateau '" . $this->name . "' accèlère à  " . $this->vitesse . " km/h" . PHP_EOL;
    }

}
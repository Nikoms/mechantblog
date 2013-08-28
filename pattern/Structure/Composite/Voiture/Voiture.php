<?php
/**
 * @author Nicolas De Boose
 */

namespace Structure\Composite\Voiture;


class Voiture implements IVoiture
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function stop()
    {
        echo "La voiture '" . $this->name . "' s'arrête" . PHP_EOL;
    }

    public function explose()
    {
        echo "La voiture '" . $this->name . "' explose" . PHP_EOL;
    }

}
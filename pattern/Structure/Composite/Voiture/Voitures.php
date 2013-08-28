<?php
/**
 * @author Nicolas De Boose
 */

namespace Structure\Composite\Voiture;


class Voitures implements IVoiture
{

    /**
     * @var IVoiture[]
     */
    private $voitures = array();
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function stop()
    {
        echo "Le groupe de voitures '" . $this->name . "' s'arrête" . PHP_EOL;
        foreach ($this->voitures as $voiture) {
            $voiture->stop();
        }
    }

    public function explose()
    {
        echo "Le groupe de voitures " . $this->name . "' explose" . PHP_EOL;
        foreach ($this->voitures as $voiture) {
            $voiture->explose();
        }
    }


    public function add(IVoiture $voiture)
    {
        $this->voitures[] = $voiture;
    }

}
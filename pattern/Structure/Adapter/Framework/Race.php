<?php
/**
 * @author Nicolas De Boose
 */

namespace Structure\Adapter\Framework;


class Race
{

    /**
     * @var IVoiture[]
     */
    private $voitures = array();

    public function addVoiture(IVoiture $voiture)
    {
        $this->voitures[] = $voiture;
    }

    public function start()
    {
        foreach ($this->voitures as $voiture) {
            $voiture->accelere();
        }
    }

    public function exploseVoitureAuHasard()
    {
        $voitureAuHasard = rand(0, count($this->voitures) - 1);
        $this->voitures[$voitureAuHasard]->explose();
    }
}
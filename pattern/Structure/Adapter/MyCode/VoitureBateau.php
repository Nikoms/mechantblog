<?php
/**
 * @author Nicolas De Boose
 */

namespace Structure\Adapter\MyCode;


use Structure\Adapter\Framework\IVoiture;

class VoitureBateau implements IVoiture
{

    private $bateau;

    public function __construct(IBateau $bateau)
    {
        $this->bateau = $bateau;
    }

    public function avance()
    {
        $this->bateau->avance();
    }

    public function changeRoues()
    {
        echo "Le bateau ne doit pas changer de roue :)";
    }

    public function accelere()
    {
        $this->bateau->accelere();
    }

    public function embraye($int)
    {
        $this->bateau->accelere();
    }

    public function explose()
    {
        $this->bateau->coule();
    }


}
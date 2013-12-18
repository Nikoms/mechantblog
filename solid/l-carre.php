<?php
namespace Mechant\Solid\Liskov\Exemple1;

class Rectangle
{
    private $largeur;
    private $hauteur;

    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    }

    public function getHauteur()
    {
        return $this->hauteur;
    }

    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    }

    public function getLargeur()
    {
        return $this->largeur;
    }
}

//Ma hauteur représentera mon "coté"
class Carre extends Rectangle
{

    public function setLargeur($largeurEtHauteur)
    {
        //Tant pis pour largeur qui sera toujours vide :(
        $this->setHauteur($largeurEtHauteur);
    }

    public function getLargeur()
    {
        return $this->getHauteur();
    }
}

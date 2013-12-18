<?php

namespace Mechant\Solid\Liskov\Exemple2;

class Voiture
{

    public function avance()
    {
        //...
    }

    public function recule()
    {
        //...
    }

    public function tourneAGauche()
    {
        //...
    }

    public function tourneADroite()
    {
        //...
    }

    public function ajouteEssence()
    {
        //...
    }

    public function changePneu()
    {
        //...
    }
}

class PasDePneuException extends \Exception
{
    public function __construct(){
        parent::__construct("Je n'ai pas de pneu");
    }
}

class VoitureVolante extends Voiture
{

    public function changePneu()
    {
        //Solution1: Ne rien faire

        //Solution2: faire Autre chose qui ressemble
        $this->changeTrainAterissage();

        //Solution3: Lancer une exception
        throw new PasDePneuException();

    }

    //Dois-je mettre ceci en public étant donné qu'on y accède via "changePneu" ?
    private function changeTrainAterissage()
    {
        //...
    }
}

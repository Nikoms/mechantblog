<?php
namespace Mechant\Solid\Liskov;

//Interface très simplifiée
interface Voiture
{
    public function avance();

    public function changePneu();
}

//La Voiture volante, n'a pas la méthode changePneu, et n'est donc pas une voiture
class VoitureVolante
{
    //Similaire à "avance" pour une voiture normale
    public function volePlusVite()
    {
        echo "La voiture volante avance/vole plus vite!";
    }
}

//Mon fameux adaptateur
class VoitureVolanteAdaptateur implements Voiture
{
    private $voitureVolante;

    public function __construct(VoitureVolante $voitureVolante)
    {
        $this->voitureVolante = $voitureVolante;
    }

    public function avance()
    {
        $this->voitureVolante->volePlusVite();
    }

    public function changePneu()
    {
        //Rien à faire
    }

}

$voiture = new VoitureVolanteAdaptateur(new VoitureVolante());
$voiture->avance();
$voiture->changePneu();

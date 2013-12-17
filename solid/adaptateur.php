<?php
/**
 * @author Nicolas De Boose
 */

//Interface très simplifiée
interface Voiture
{
    public function avance();

    public function changePneu();
}

//La Voiture volante, n'a pas la méthode changePneu, et n'est donc pas une voiture
class VoitureVolante
{
    public function avance()
    {
        echo "La voiture volante avance!";
    }
}

//Mon adaptateur
class VoitureVolanteAdaptateur implements Voiture
{
    private $voitureVolante;

    public function __construct(VoitureVolante $voitureVolante)
    {
        $this->voitureVolante = $voitureVolante;
    }

    public function avance()
    {
        $this->voitureVolante->avance();
    }

    public function changePneu()
    {
        //Rien à faire
    }

}

$voiture = new VoitureVolanteAdaptateur(new VoitureVolante());
$voiture->avance();
$voiture->changePneu();
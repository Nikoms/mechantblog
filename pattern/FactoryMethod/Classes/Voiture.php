<?php
namespace FactoryMethod\Classes;

abstract class Voiture
{

    private $vitesse = 0;
    private $vie = 100;
    /**
     * @var Roue
     */
    public $roues;
    /**
     * @var PareChocs
     */
    public $pareChocs;

    abstract function getVitesseMax();

    abstract function getResistance();

    public function setRoues(Roue $roue)
    {
        $this->roues = $roue;
    }

    public function setParChocs(PareChocs $pareChoc)
    {
        $this->pareChocs = $pareChoc;
    }

    public function avance()
    {
        $this->roues->used++;
    }

    public function accelere()
    {
        $nextSpeed = $this->vitesse + 10;
        //Je ne peux pas aller plus vite que mon max
        if ($nextSpeed > $this->getVitesseMax()) {
            $nextSpeed = $this->getVitesseMax();
        }
        $this->vitesse = $nextSpeed;
    }

    public function accident($coup)
    {
        $coupSurLaVoiture = $coup * ($this->pareChocs->tauxAbsorption / 100);

        $futurVie = $this->vie - $coupSurLaVoiture;
        if ($futurVie < 0) {
            $futurVie = 0;
        }
        $this->vie = $futurVie;

        //J'ai plus de vie, je stoppe la voiture
        if ($this->vie === 0) {
            $this->vitesse = 0;
        }
    }
}
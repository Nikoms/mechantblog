<?php
/**
 * Created by PhpStorm.
 * User: Nikoms
 * Date: 10/09/13
 * Time: 22:36
 */

namespace Comportement\Template\Voiture;


abstract class AVoiture {
    abstract public function allumeMoteur();
    abstract public function embraye($int);
    abstract public function accelere();
    public function demarre(){
        if($this->canDemarre()){
            $this->allumeMoteur();
            $this->embraye(1);
            $this->accelere();
        }
    }

    public function canDemarre(){
        return true;
    }
}

/**
 * Squelette d'un algo
 * Donne des étapes (pas spécialement tout à une sous classe)
 * pas mal utilisé pour le refactoring : on cherche les différences et les points communs et hop template
 * "dont call us we will call you"
 * Factory method utilise souvent ce pattern
 * Parfois utilisé avec Strategy
 */
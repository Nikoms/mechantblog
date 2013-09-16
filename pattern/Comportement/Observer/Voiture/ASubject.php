<?php
/**
 * Created by PhpStorm.
 * User: Nikoms
 * Date: 15/09/13
 * Time: 20:31
 */

namespace Comportement\Observer\Voiture;


abstract class ASubject {

    private $name;
    /**
     * @var IObserver[]
     */
    private $observers;


    public function __construct($name){
        $this->name = $name;
    }

    public function attach(IObserver $observer){
        $this->observers[] =$observer;
    }
    public function detach(IObserver $observer){
        foreach($this->observers as $keyObs => $obs){
            if($observer === $obs){
                unset($this->observers[$keyObs]);
            }
        }
    }

    public function notify(){
        foreach($this->observers as $obs){
            $obs->update($this);
        }
    }


    public function setName($name){
        $nameHasChanged = $this->name !== $name;
        $this->name = $name;
        if($nameHasChanged){
            $this->notify();
        }
    }

    public function getName(){
        return $this->name;
    }

} 
<?php
/**
 * Created by PhpStorm.
 * User: Nikoms
 * Date: 15/09/13
 * Time: 20:30
 */

namespace Comportement\Observer\Voiture;


interface IObserver {
    public function update(ASubject $subject);
} 
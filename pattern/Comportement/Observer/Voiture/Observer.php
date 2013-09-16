<?php
/**
 * Created by PhpStorm.
 * User: Nikoms
 * Date: 15/09/13
 * Time: 20:37
 */

namespace Comportement\Observer\Voiture;


class Observer implements IObserver
{
    public function update(ASubject $subject)
    {
        echo 'Nouveau nom ('.get_class($this).')'  . $subject->getName()."<br />\n";
    }

} 
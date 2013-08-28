<?php
/**
 * @author Nicolas De Boose
 */

namespace Structure\Adapter\Framework;


interface IVoiture
{
    public function avance();

    public function changeRoues();

    public function accelere();

    public function embraye($int);

    public function explose();
}
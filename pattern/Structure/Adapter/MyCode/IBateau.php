<?php
/**
 * @author Nicolas De Boose
 */

namespace Structure\Adapter\MyCode;


interface IBateau
{
    public function coule();

    public function avance();

    public function accelere();
}
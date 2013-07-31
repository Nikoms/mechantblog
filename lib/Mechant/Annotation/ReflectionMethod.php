<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 1/08/13
 * Time: 0:06
 * To change this template use File | Settings | File Templates.
 */

namespace Mechant\Annotation;


class ReflectionMethod
{

    /**
     * @var \ReflectionMethod
     */
    private $reflection;

    /**
     * @param \ReflectionMethod $reflectionMethod
     */
    public function __construct(\ReflectionMethod $reflectionMethod)
    {
        $this->reflection = $reflectionMethod;
    }
}
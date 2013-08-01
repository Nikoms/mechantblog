<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 1/08/13
 * Time: 0:06
 * To change this template use File | Settings | File Templates.
 */

namespace Mechant\Annotation;


class ReflectionClass
{

    /**
     * @var \ReflectionClass
     */
    private $reflection;

    /**
     * @var ReflectionMethod[]
     */
    private $methods;

    /**
     * @param mixed $argument
     */
    public function __construct($argument)
    {
        $this->reflection = new \ReflectionClass($argument);
    }

    /**
     * @return ReflectionMethod[]
     */
    public function getMethods()
    {
        if ($this->methods === null) {
            $this->methods = array();
            foreach ($this->reflection->getMethods() as $method) {
                $this->methods[] = new ReflectionMethod($method);
            }
        }
        return $this->methods;
    }
}
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 1/08/13
 * Time: 0:01
 * To change this template use File | Settings | File Templates.
 */

namespace Mechant\Annotation;


class AnnotationReader
{

    /**
     * @var ReflectionClass
     */
    private $reflection;

    /**
     * @param mixed $argument Instance ou nom de classe
     */
    public function __construct($argument)
    {
        $this->reflection = new ReflectionClass($argument);
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return array
     */
    public function filterMethod($key, $value)
    {
        $methods = array();
        foreach ($this->reflection->getMethods() as $method) {
            if (in_array($value, $method->getAnnotation($key))) {
                $methods[] = $method;
            }
        }

        return $methods;
    }
}
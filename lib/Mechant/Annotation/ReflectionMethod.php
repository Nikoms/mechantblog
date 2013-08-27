<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 1/08/13
 * Time: 0:06
 * To change this template use File | Settings | File Templates.
 */

namespace Mechant\Annotation;


class ReflectionMethod extends \ReflectionMethod
{

    /**
     * @var array
     */
    private $annotations;

    /**
     * @param mixed $class
     * @param string $name
     */
    public function __construct($class, $name)
    {
        parent::__construct($class, $name);
        $this->init();
    }

    private function init()
    {
        //Only parenthese: (@\w+)\s+(\()(.*?)(\))
        //rapide : (@\w+)\s+(.*)

        $this->annotations = array();
        if (preg_match_all('/@(\w+)\s+(.*)/', $this->getDocComment(), $matches)) {
            foreach ($matches[1] as $id => $key) {
                if (!isset($this->annotations[$key])) {
                    $this->annotations[$key] = array();
                }
                //J'enlève les parenthèses et les espaces avant/après
                $this->annotations[$key][] = trim(trim($matches[2][$id]), ')( ');
            }
        }
        print_R($this->annotations);
    }

    /**
     * @param string $key
     * @return bool
     */
    public function hasAnnotation($key)
    {
        return isset($this->annotations[$key]);
    }

    /**
     * @param string $key
     * @return array
     */
    public function getAnnotation($key)
    {
        return $this->hasAnnotation($key) ? $this->annotations[$key] : array();

    }

}
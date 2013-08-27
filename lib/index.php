<?php
include(__DIR__ . '/autoload.php');

$annotation = new \Mechant\Annotation\AnnotationReader(new \Mechant\Annotation\Example());

var_dump($annotation->filterMethod("test", "1"));
var_dump($annotation->filterMethod("test", ""));
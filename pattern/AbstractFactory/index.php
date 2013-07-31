<?php

include '../autoload.php';

//Old school
var_dump(\AbstractFactory\Classes\VoitureFactoryBad::create('peugeot', '4x4'));
var_dump(\AbstractFactory\Classes\VoitureFactoryBad::create('peugeot', 'course'));

var_dump(\AbstractFactory\Classes\VoitureFactoryBad::create('citroen', '4x4'));
var_dump(\AbstractFactory\Classes\VoitureFactoryBad::create('citroen', 'course'));


$voitureManager = new \AbstractFactory\Classes\VoitureManager(new \AbstractFactory\Classes\Peugeot\VoitureFactory());

var_dump($voitureManager->create('course'));
var_dump($voitureManager->create('4x4'));


$voitureManager = new \AbstractFactory\Classes\VoitureManager(new \AbstractFactory\Classes\Citroen\VoitureFactory());

var_dump($voitureManager->create('course'));
var_dump($voitureManager->create('4x4'));
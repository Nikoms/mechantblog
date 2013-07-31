<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 30/07/13
 * Time: 22:14
 * To change this template use File | Settings | File Templates.
 */

namespace AbstractFactory\Classes;


class VoitureManager
{

    private $factory;

    public function __construct(VoitureFactory $factory)
    {
        $this->factory = $factory;
    }

    public function create($type)
    {
        switch ($type) {
            default:
                throw new \Exception('Nop');
                break;
            case '4x4':
                $voiture = $this->factory->createVoitureToutTerrain();
                break;
            case 'course':
                $voiture = $this->factory->createVoitureRapide();
                break;
        }
        $voiture->prepare();
        $voiture->setRoues($this->factory->createRoue());

        return $voiture;
    }


}
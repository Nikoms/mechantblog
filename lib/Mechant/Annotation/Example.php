<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikoms
 * Date: 1/08/13
 * Time: 1:21
 * To change this template use File | Settings | File Templates.
 */

namespace Mechant\Annotation;


class Example
{

    /**
     * @test 1
     * @test    2
     * @test  3
     * @go go1
     */
    public function testMethod1()
    {

    }

    /**
     * @test 2
     */
    public function testMethod2()
    {

    }

    /**
     * @go 1
     */
    public function testMethod3()
    {

    }

    /**
     * @test            1
     */
    public function testMethod4()
    {

    }


    /**
     * @test
     * 1
     */
    public function testMethod5()
    {

    }
}
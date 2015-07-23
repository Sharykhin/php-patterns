<?php
namespace Transformers;
use Fly\GadgetFly;
use RocketDump\BigRocket;

abstract class Transformers
{
    private $flyBehaviour;

    private $rocketBihaviour;

    public function __construct()
    {
        $this->flyBehaviour = new GadgetFly();
        $this->rocketBihaviour = new BigRocket();
    }
    public function transform() {}

    public function shoot()
    {
        print  " I can shoot<br/>";
    }

    public function fly()
    {
        $this->flyBehaviour->fly();
    }

    public function rocketLaunch()
    {
        $this->rocketBihaviour->rocketLaunch();
    }

    public function getId()
    {
        print "My unique Id is".rand(12312,543543)."<br/>";
    }
}
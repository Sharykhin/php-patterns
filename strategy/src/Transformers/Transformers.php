<?php
namespace Transformers;
use Fly\FlyInterface;
use Fly\GadgetFly;
use RocketDump\BigRocket;
use RocketDump\RocketDumpInterface;

abstract class Transformers
{
    protected $flyBehaviour;

    protected $rocketBihaviour;

    public function __construct()
    {
        $this->flyBehaviour = new GadgetFly();
        $this->rocketBihaviour = new BigRocket();
    }
    abstract public function transform();

    public function setFlyBehaviour(FlyInterface $flyBehaviour)
    {
        $this->flyBehaviour = $flyBehaviour;
    }

    public function setRocketBehaviour(RocketDumpInterface $rocketBehavior)
    {
        $this->rocketBihaviour = $rocketBehavior;
    }

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
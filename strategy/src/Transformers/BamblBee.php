<?php
namespace Transformers;

use Fly\NoFly;
use RocketDump\NoRocket;

class BamblBee extends Transformers
{
    public function __construct()
    {
        $this->flyBehaviour = new NoFly();
        $this->rocketBihaviour = new NoRocket();
    }
    public function transform()
    {
        print "BamblBee - transform<br/>";
    }

}
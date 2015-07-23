<?php
namespace Transformers;

abstract class Transformers
{
    abstract public function transform();

    abstract public function shoot();

    abstract public function fly();

    public function getId()
    {
        print "My unique Id is".rand(12312,543543)."<br/>";
    }
}
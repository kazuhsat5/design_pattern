<?php

class Facade
{

    public function exec()
    {

        $modelA = new ModelA();
        $modelB = new ModelB();

        $a = $modelA->get();
        $b = $modelB->get();

        return $a + $b;
    }
}


class ModelA
{

    public function get()
    {

        return 1;
    }
}


class ModelB
{

    public function get()
    {

        return 2;
    }
}


// client
$obj = new Facade();
var_dump($obj->exec());

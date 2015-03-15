<?php

abstract class TestAbstract
{

    abstract public function exec();
}

class TestA extends TestAbstract
{

    static public function create()
    {

        return new TestA();
    }


    public function exec()
    {

        echo 'TestA' . PHP_EOL;
    }
}

class TestB extends TestAbstract
{

    static public function create()
    {

        return TestB();
    }


    public function exec()
    {

        echo 'TestB' . PHP_EOL;
    }
}

$test = 'TestA';

if ($test === 'TestA') {

    $factory = TestA::create();

} else {

    $factory = TestB::create();
}

$factory->exec();

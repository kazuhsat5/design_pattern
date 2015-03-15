<?php

abstract class Builder
{

    abstract function testA();

    abstract function testB();
}

class ConcreteBuilder extends Builder
{

    public function testA()
    {

        echo 'TestA' . PHP_EOL;
    }


    public function testB()
    {

        echo 'TestB';
    }
}

class Director
{

    private $_builder;


    public function __construct(Builder $builder)
    {

        $this->_builder = $builder;
    }


    public function exec()
    {

        $this->_builder->testA();
        $this->_builder->testB();
    }
}


$obj = new Director(new ConcreteBuilder());
$obj->exec();

<?php
class Manager
{
    var string $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(string $name)
    {
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}

class VicePrsident extends Manager {}

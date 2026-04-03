<?php

class Person
{
    const AUTHOR = "Muhamad Nur Rizki";
    // properties
    // menambahkan tipe data pada properties
    var string $name;
    var int $age;
    var string $address;
    var string $country = "Indonesia"; // Default value

    function __construct(string $name, int $age, string $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }
}

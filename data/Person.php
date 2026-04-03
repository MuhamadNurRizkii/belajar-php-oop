<?php

class Person
{
    // properties
    // menambahkan tipe data pada properties
    var string $name;
    var int $age;
    var string $address;
    var string $country = "Indonesia"; // Default value

    function sayHello(string $name)
    {
        echo "Hello, $name" . PHP_EOL;
    }
}

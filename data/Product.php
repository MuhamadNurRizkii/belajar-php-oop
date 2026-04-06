<?php

class Product
{
    protected string $name;
    protected int $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getInfo()
    {
        echo "Name: $this->name" . PHP_EOL;
        echo "Price: $this->price" . PHP_EOL;
    }
}

class Productcategory extends Product
{
    protected string $category;

    public function getInfo()
    {
        echo "Name: $this->name" . PHP_EOL;
        echo "Price: $this->price" . PHP_EOL;
        echo "Category: $this->category" . PHP_EOL;
    }
}

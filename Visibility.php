<?php

require_once 'data/Product.php';

$product1 = new Product('Mangga', 10000);
$product2 = new Productcategory("Jeruk", 20000);

$product1->getInfo();
$product2->getInfo();

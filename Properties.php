<?php
require_once 'data/Person.php';

$budi = new Person("Budiansyah", 20, 'Bandung');
$andi = new Person("Andi Nugraha", 19, "Tangerang");

// manipulasi properties budi
$budi->name = "Budiansyah";
$budi->age = 20;
$budi->address = "Bandung";

// manipulasi properties andi
$andi->name = "Andi Nugraha";
$andi->age = 19;
$andi->address = "Tangerang";

echo "Name: {$budi->name}" . PHP_EOL;
echo "Age: {$budi->age}" . PHP_EOL;
echo "Address: {$budi->address}" . PHP_EOL;
echo "Country: {$budi->country}" . PHP_EOL;

echo "\n";

echo "Name: {$andi->name}" . PHP_EOL;
echo "Age: {$andi->age}" . PHP_EOL;
echo "Address: {$andi->address}" . PHP_EOL;
echo "Country: {$andi->country}" . PHP_EOL;

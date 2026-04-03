<?php
require_once 'data/Person.php';

$budi = new Person("Budi", 19, "Bandung");
$budi->name = "Budi";

$budi->sayHello("Andi");

$andi = new Person("Andi", 20, "Tangerang");
$andi->name = "Andi";

$andi->sayHello(null);

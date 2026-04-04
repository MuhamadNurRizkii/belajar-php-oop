<?php

require_once 'data/Manager.php';

$manager = new Manager("Rizki");
$manager->sayHello("Joko");

$vp = new VicePrsident("Joko");
$vp->sayHello("Rizki");

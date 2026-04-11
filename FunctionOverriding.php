<?php
require_once 'data/Manager.php';

$manager = new Manager("Andi");
$manager->sayHello("Joko");

$vp = new VicePrsident("Rizki");
$vp->sayHello("Joko");

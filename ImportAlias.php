<?php

require_once 'data/Conflict.php';
require_once 'data/Helper.php';

use Data\One\Conflict as conflict1;
use Data\Two\Conflict as conflict2;
use function Helper\{helpMe as help, sayHello};
use const Helper\APPLICATION as app;

$conflict1 = new conflict1();
$conflict2 = new conflict2();

help();
sayHello();

echo app . PHP_EOL;

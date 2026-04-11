<?php

use function Helper\sayHello;

require_once 'data/Programmer.php';

$company = new Company();
$company->programmer = new Programmer("Rizki");
$company->programmer = new BackendProgrammer("Rizki");
$company->programmer = new FrontendProgrammer("Rizki");

sayHelloProgrammer(new Programmer("Andi"));
sayHelloProgrammer(new BackendProgrammer("Joko"));
sayHelloProgrammer(new FrontendProgrammer("Budi"));

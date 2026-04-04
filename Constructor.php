<?php
require_once 'data/Person.php';

$rizki = new Person("Muhamad Nur Rizki", 29, "Tangerang");
$asa = new Person("Emina Asa", 29, "Tokyo");

$rizki->sayHello("Asa");
$asa->sayHello("Rizki");

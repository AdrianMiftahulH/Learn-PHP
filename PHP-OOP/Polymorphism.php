<?php

require "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Adrian");
var_dump($company);
$company->programmer = new BackendProgrammer("Adriana"); //use polymorphism
var_dump($company);
$company->programmer = new FrondendProgrammer("Adriani");
var_dump($company);

// Make polymorphism with function
sayHelloProgrammer(new Programmer("Adriano"));
sayHelloProgrammer(new FrondendProgrammer("Adriano"));
sayHelloProgrammer(new BackendProgrammer("Adriane"));

<?php

require_once "data/person.php";

$adrian = new Person("Adrian", "Cimahi"); // It is mandatory to include parameter values, if there is a constructor
$adrian->name = "Adrian";
// use Function in Class
$adrian->sayHello("Nio");
// output --> Hello Nio, my name is Adrian

$nina = new Person("Adrian", "Cimahi"); // It is mandatory to include parameter values, if there is a constructor
$nina->name = "Nina";
// use Function in Class
$nina->sayHello(null);
// output --> Hello, my name is Nina

$nina->info();

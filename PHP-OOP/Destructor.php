<?php

require_once "data/person.php";

$Adrian = new Person("Adrian", "Cimahi"); //It is mandatory to include parameter values, if there is a constructor
$Nina = new Person("Nina", "Cimahi"); //It is mandatory to include parameter values, if there is a constructor

echo "Program Selesai" . PHP_EOL;

// output
/*
    Program Selesai
    Object person Nina is Destroy
    Object person Adrian is Destroy
*/

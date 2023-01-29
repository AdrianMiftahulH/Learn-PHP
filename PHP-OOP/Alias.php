<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// Make a alias keyword in a use keyword
use \Data\One\{Conflict as Conflict1, Conflict as Conflict2}; //make an group use with alias
use function Helper\helpMe as help; // make an alias in a function
use const Helper\APPLICATION as APP; // make a const in a function

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();


echo APP . PHP_EOL; //calling const with an alias
help(); //calling function with an alias

<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// Make a use keyword
use \Data\One\Conflict; //calling namespace
use function Helper\helpMe; // calling function in a namespace
use const Helper\APPLICATION; //calling constant in a namespace

$conflict1 = new Conflict(); //calling a namespace
$conflict2 = new Conflict();


echo APPLICATION . PHP_EOL; //calling const in a namespace
helpMe(); //calling function in a namespace

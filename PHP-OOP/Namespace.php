<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new \Data\One\Conflict(); //calling a namespace
$conflict2 = new \Data\Two\Conflict();


echo Helper\APPLICATION . PHP_EOL; //calling const in a namespace
Helper\helpMe(); //calling function in a namespace

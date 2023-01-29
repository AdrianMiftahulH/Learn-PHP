<?php

require_once "data/person.php";

define("APPLICATION", "Learn PHP Basic");
const APP_VERSION = "1.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

echo Person::AUTHOR . PHP_EOL; //use constant in class

$info = new Person("adrian", "cimahi");
$info->info();
// output -> Author : Adrian Miftahul Haq
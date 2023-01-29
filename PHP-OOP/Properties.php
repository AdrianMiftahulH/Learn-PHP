<?php

require_once "data/person.php";

$person = new Person();
$person2 = new Person();

// create properties
$person->name = "Adrian";
$person->address = "Cimahi";
$person->country = "Indonesia";

var_dump($person);
// output
// object(Person)#1 (3) {
//     ["name"]=>
//     string(6) "Adrian"
//     ["address"]=>
//     string(6) "Cimahi"
//     ["country"]=>
//     string(9) "Indonesia"
//   }

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;
// Output
// Name : Adrian
// Address : Cimahi
// Country : Indonesia


$person2->name = "Adrian2";
$person2->address = null; //with nullable proprties
$person2->country; // With properies value default from class

var_dump($person2);
// output
// object(Person)#1 (3) {
//     ["name"]=>
//     string(6) "Adrian2"
//     ["address"]=>
//     string(6) "Cimahi2"
//     ["country"]=>
//     string(9) "Indonesia"
//   }

<?php

// An array stores multiple values in one single variable:
// Array adalah sebuah penyimpanan value dalam satu variabel

$varCar = array("BMW", "Toyota", "Honda");

$arrlength = count($varCar);

$varArray2 = [
    "Eva" => "32",
    "Fitri" => "27",
    "Adrian" => "20",
];

echo "I like " . $varCar[0] . ", " . $varCar[1] . " and " . $varCar[2];

// Loop Indexed Array / Pengualangan Array terindeks

for ($x = 0; $x < $arrlength; $x++) {
    echo $varCar[$x] . "\n";
}

foreach ($varArray2 as $name => $age) {
    echo "$name, age $age \n";
}

// === Arrays in Arrays ===
$varBycycle2 = [
    ["KTM", 250, 100],
    ["Aprilia", 350, 200],
    ["BMW", 500, 300],
    ["Ducati", 750, 400],
];

// Sorting Array

// sort() - sort arrays in ascending order / mengsorting array sesuai dengan urutan
sort($varBycycle2);

foreach ($varBycycle2 as $Bycycle) {
    echo "Merk : $Bycycle[0], CC : $Bycycle[1], Stock : $Bycycle[2] \n";
}

// rsort() - sort arrays in descending order / Mengurut array dari yang terendah / Z-A
$varRsorts = array(2, 5, 7, 3);
rsort($varRsorts);

foreach ($varRsorts as $varRsort) {
    echo "$varRsort \n";
}
// asort() - sort associative arrays in ascending order, according to the value / mengurutkan dari terkecil, sesuai value
asort($varArray2);
foreach ($varArray2 as $name => $age) {
    echo "$name, age $age \n";
}
// ksort() - sort associative arrays in ascending order, according to the key / mengurutkan dari terkecil, sesuai key
ksort($varArray2);
foreach ($varArray2 as $name => $age) {
    echo "$name, age $age \n";
}
// arsort() - sort associative arrays in descending order, according to the value / mengurutkan dari terbesal, sesuai value
arsort($varArray2);
foreach ($varArray2 as $name => $age) {
    echo "$name, age $age \n";
}
// krsort() - sort associative arrays in descending order, according to the key / Mengurutkan dari terbesar, sesuai key
krsort($varArray2);
foreach ($varArray2 as $name => $age) {
    echo "$name, age $age \n";
}

<?php
// return is 
$var1 = "World";

// argument Function
function argumentFunc($argument)
{
    echo "Hello $argument \n";
}

function argumentFunc2(string $name, int $age)
{
    echo "Hello Name's $name, I age $age \n";
}

argumentFunc("World");
argumentFunc2("Adrian", 20);

// Defaul Argument functions
function argumentDefaultFunc(string $argDefault = "Default")
{
    return "haiii guys, im $argDefault \n";
}

echo argumentDefaultFunc("Learn PHP");
echo argumentDefaultFunc(); //will use value default  
echo argumentDefaultFunc("Learn coding");

// Operator use Function
function additionFunc(int $varFirst, int $varSec)
{
    return $varFirst + $varSec;
}

echo additionFunc(10, 15);

// argument Reference
function argRef(&$values)
{
    $values += 5;
}

$valueFirst = 5;
argRef($valueFirst);
echo $valueFirst;

<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{
}
class FrondendProgrammer extends Programmer
{
}

class Company
{
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof BackendProgrammer) { //instanceof berfungsi untuk check sebuah object
        echo "hello Backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrondendProgrammer) {
        echo "hello Frontend Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof Programmer) {
        echo "Programmer $programmer->name" . PHP_EOL;
    }
}

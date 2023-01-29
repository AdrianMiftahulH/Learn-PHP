<?php

namespace DataCar;

// How to use Interface Inheritance
interface HasBrand
{
    function getBand(): string;
}

interface isMaintenance
{
    function isMaintenance(): bool;
}
// How to use Interface
interface Car extends HasBrand // with interface inhertance
{ // default abstract
    function drive(): void;
    function getTire(): int;
}


class Avanza implements Car, isMaintenance //use implements
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }
}

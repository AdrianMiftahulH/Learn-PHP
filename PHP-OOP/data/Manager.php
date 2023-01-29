<?php


class Manager
{
    var string $name;

    function sayHello(string $name): void //void adalah function yang tidak mengmebalikan value
    {
        echo "Hi $name, My name is Manager $this->name" . PHP_EOL;
    }

    function getCorner(): int
    {
        return 5;
    }
}

class VicePresident extends Manager //Create class child from class Manager(class Parent)
{
    // Create Function Overrinding
    function sayHello(string $name): void //void adalah function yang tidak mengmebalikan value
    {
        echo "Hi $name, My name is VP $this->name" . PHP_EOL;
    }

    // Create Parent Keyword
    function getParentCorner(): int
    {
        return parent::getCorner();
    }
}

<?php

namespace DataAnimal;

// How to use Abstract Function 


abstract class Animal //important use abstract
{

    public string $name;

    abstract public function run(): void; // jangan menggunakan body/{}
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }
}

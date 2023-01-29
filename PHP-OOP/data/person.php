<?php

class Person
{
    // Constant

    const AUTHOR = "Adrian Miftahul Haq"; //create constant in class

    // Properties

    var string $name; // with properties type
    var ?string $address; //with Nullable properties ,(?) before type properties
    var $country = "Indonesian"; //with Properties value Default

    // Methods

    // Constructor
    function __construct(string $name, string $address)
    // If there are parameters in the constructor, it is mandatory when called that the parameter values ​​are included
    {
        $this->name = $name;
        $this->address = $address;
    }

    // Destructor
    function __destruct()
    {
        echo "Object person $this->name is Destroy" . PHP_EOL;
    }
    // use Function in Class/Object
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hello, my name is $this->name" . PHP_EOL; //with this keyword
        } else {
            echo "Hello $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL; // with self keyword
    }
}

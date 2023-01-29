<?php

require_once "data/Location.php";
require_once "data/Animal.php";

use Data\{Location, City, Province, Country};
use DataAnimal\{Animal, Cat, Dog};

// $location = new Location(); -> error
$city = new City();
$province = new Province();
$country = new Country();


// Abstract Function

$cat = new Cat();
$cat->name = "Oyen";
$cat->run();

$dog = new Dog();
$dog->name = "Doggy";
$dog->run();

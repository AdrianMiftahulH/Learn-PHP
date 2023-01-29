<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Adrian";
$manager->sayHello("Joko");

$vp = new Manager(); //calling class child
$vp->name = "Lila";
$vp->sayHello("Joko");

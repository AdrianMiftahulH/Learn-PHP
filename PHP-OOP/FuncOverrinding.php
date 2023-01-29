<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Adrian";
$manager->sayHello("Inull");
// Hi Inull, My name is Manager Adrian

$vp = new VicePresident();
$vp->name = "Adrina";
$vp->sayHello("Lulu");
// Hi Lulu, My name is VP Adrina

// calling func overriding with parent ketword
$corner = new VicePresident();
echo $corner->getParentCorner();
// 5
<?php

require_once "data/product.php";

$product = new Product("Apple", 20000);

echo $product->getName() . PHP_EOL;

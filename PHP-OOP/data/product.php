<?php

class Product
{
    protected string $name; //creata variabel with visibility Protected
    private int $price; //creata variabel with visibility Private

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string // return berbentuk string
    {
        return $this->name;
    }

    public function getPrice(): string // return berbentuk string
    {
        return $this->price;
    }
}

class ProductDummyName extends Product
{
    public function info()
    {
        echo "Name $this->name" . PHP_EOL;
    }
}

<?php

// How to use Getter dan Setter

class Category
{
    private string $name;
    private bool $expensive;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        if (trim($name) != "") {
        }
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}

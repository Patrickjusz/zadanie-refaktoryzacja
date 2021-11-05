<?php

namespace App\Models;

abstract class Product
{
    private string $name;
    public int $sellIn;
    public int $quality;

    function __construct(string $name, int $sellIn, int $quality)
    {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->quality = $quality;
    }

    public function __toString(): string
    {
        return "{$this->name}, {$this->sellIn}, {$this->quality}";
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    abstract function updateQuality(): void;
}

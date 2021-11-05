<?php

namespace App\Models;

abstract class Product
{
    public $name;
    public $sellIn;
    public $quality;

    function __construct(string $name, int $sellIn, int $quality)
    {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->quality = $quality;
    }

    public function __toString()
    {
        return "{$this->name}, {$this->sellIn}, {$this->quality}";
    }

    abstract function updateQuality(): void;
}

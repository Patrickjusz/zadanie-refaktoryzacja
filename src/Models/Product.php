<?php

namespace App\Models;

/**
 * Product
 */
abstract class Product
{
    private string $name;
    public int $sellIn;
    public int $quality;

    /**
     * __construct
     *
     * @param  mixed $name
     * @param  mixed $sellIn
     * @param  mixed $quality
     * @return void
     */
    public function __construct(string $name, int $sellIn, int $quality)
    {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->quality = $quality;
    }

    /**
     * __toString
     *
     * @return string
     */
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

    /**
     * updateQuality
     *
     * @return void
     */
    abstract function updateQuality(): void;
}

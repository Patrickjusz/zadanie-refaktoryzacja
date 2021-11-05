<?php

namespace App\Models;

/**
 * AgedBrieProduct
 */
class AgedBrieProduct extends Product
{
    /**
     * updateQuality
     *
     * @return void
     */
    public function updateQuality(): void
    {
        if ($this->quality < 50) {
            $this->quality++;
        }

        $this->sellIn--;

        if ($this->sellIn < 0 && $this->quality < 50) {
            $this->quality++;
        }
    }
}

<?php

namespace App\Models;

/**
 * StandardProduct
 */
class StandardProduct extends Product
{
    /**
     * updateQuality
     *
     * @return void
     */
    public function updateQuality(): void
    {
        $this->quality -= 1;
        $this->sellIn -= 1;

        if ($this->sellIn <= 0) {
            $this->quality -= 1;
        }
    }
}

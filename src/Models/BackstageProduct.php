<?php

namespace App\Models;

/**
 * BackstageProduct
 */
class BackstageProduct extends Product
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

            if ($this->sellIn < 11) {
                if ($this->quality < 50) {
                    $this->quality++;
                }
            }

            if ($this->sellIn < 6) {
                if ($this->quality < 50) {
                    $this->quality++;
                }
            }
        }

        $this->sellIn--;

        if ($this->sellIn < 0) {
            $this->quality -= $this->quality;
        }
    }
}

<?php

namespace App\Models;

class BackstageProduct extends Product
{
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

        $this->sellIn = $this->sellIn - 1;

        if ($this->sellIn < 0) {
            $this->quality -= $this->quality;
        }
    }
}

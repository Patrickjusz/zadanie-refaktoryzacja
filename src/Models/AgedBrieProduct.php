<?php

namespace App\Models;

class AgedBrieProduct extends Product
{
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

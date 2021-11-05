<?php

namespace App\Models;

class StandardProduct extends Product
{
    public function updateQuality(): void
    {
        $this->quality -= 1;
        $this->sellIn -= 1;

        if ($this->sellIn <= 0) {
            $this->quality -= 1;
        }
    }
}

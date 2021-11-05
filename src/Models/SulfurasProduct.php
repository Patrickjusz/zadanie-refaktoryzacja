<?php

namespace App\Models;

/**
 * SulfurasProduct
 */
class SulfurasProduct extends Product
{
    public function updateQuality(): void
    {
        if ($this->quality > 0) {
            $this->quality = 80;
        }
    }
}

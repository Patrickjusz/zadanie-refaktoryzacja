<?php

namespace App\Models;

class SulfurasProduct extends Product
{
    public function updateQuality(): void
    {
        if ($this->quality > 0) {
            $this->quality = 80;
        }
    }
}

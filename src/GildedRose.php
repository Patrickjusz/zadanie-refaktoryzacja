<?php

namespace App;

use App\Models\Product;
use App\Models\AgedBrieProduct;
use App\Models\StandardProduct;
use App\Models\SulfurasProduct;
use App\Models\BackstageProduct;

interface CreatorInterface
{
    public static function create(string $name, int $sellIn, int $quality);
}

final class ProductCreator implements CreatorInterface
{
    private function __constructor()
    {
        // 
    }

    public static function create(string $name, int $sellIn, int $quality): Product
    {
        if (!empty($name)) {
            switch ($name) {
                case 'Aged Brie':
                    return new AgedBrieProduct($name, $sellIn, $quality);
                    break;
                case 'Sulfuras, Hand of Ragnaros':
                    return new SulfurasProduct($name, $sellIn, $quality);
                    break;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    return new BackstageProduct($name, $sellIn, $quality);
                    break;
                default:
                    return new StandardProduct($name, $sellIn, $quality);
            }
        } else {
            throw new \Exception('The name value cannot be empty.');
        }
    }
}

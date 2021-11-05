<?php

namespace App;

use App\Models\Product;
use App\Models\AgedBrieProduct;
use App\Models\StandardProduct;
use App\Models\SulfurasProduct;
use App\Models\BackstageProduct;

interface CreatorInterface
{
    /**
     * create
     *
     * @param  string $name
     * @param  int $sellIn
     * @param  int $quality
     * @return void
     */
    public static function create(string $name, int $sellIn, int $quality);
}

/**
 * ProductCreator - product factory 
 * 
 * Example usage: 
 * $product = ProductCreator::create($name, $sellIn, $quality);
 * 
 * @author Patryk Jastrzębski <kontakt@pjastrzebski.pl>
 */
final class ProductCreator implements CreatorInterface
{
    private function __constructor()
    {
        // 
    }

    /**
     * create
     *
     * @param  string $name
     * @param  int $sellIn
     * @param  int $quality
     * @return Product
     */
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

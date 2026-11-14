<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Brand;

class ProductSeeder extends Seeder
{
    public function run(): void
    {

        $a = Brand::create(['name' => 'Choco']);
        $b = Brand::create(['name' => 'Mint']);
        $c = Brand::create(['name' => 'Dishwashing']);


        Product::create([
            'name'     => 'Choco',
            'price'    => 40,
            'stock'    => 50,
            'package'  => 'pack',
            'brand_id' => $a->id,
        ]);

        Product::create([
            'name'     => 'Mentos',
            'price'    => 10,
            'stock'    => 10,
            'package'  => 'stick',
            'brand_id' => $b->id,
        ]);

        Product::create([
            'name'     => 'Drinks',
            'price'    => 10,
            'stock'    => 20,
            'package'  => 'plastic',
            'brand_id' => $a->id,
        ]);

        Product::create([
            'name'     => 'Tops',
            'price'    => 10,
            'stock'    => 50,
            'package'  => 'sachet',
            'brand_id' => $c->id,
        ]);


        Product::create([
            'name'     => 'Mint Candy',
            'price'    => 5,
            'stock'    => 100,
            'package'  => 'pack',
            'brand_id' => $b->id,
        ]);

        Product::create([
            'name'     => 'Instant Noodles',
            'price'    => 15,
            'stock'    => 80,
            'package'  => 'pack',
            'brand_id' => $a->id,
        ]);

        Product::create([
            'name'     => 'Coffee 3-in-1',
            'price'    => 8,
            'stock'    => 120,
            'package'  => 'sachet',
            'brand_id' => $c->id,
        ]);

        Product::create([
            'name'     => 'Soft Drink',
            'price'    => 20,
            'stock'    => 40,
            'package'  => 'bottle',
            'brand_id' => $b->id,
        ]);

        Product::create([
            'name'     => 'Dishwashing Liquid',
            'price'    => 12,
            'stock'    => 60,
            'package'  => 'sachet',
            'brand_id' => $c->id,
        ]);

        Product::create([
            'name'     => 'Dishwashing Paste',
            'price'    => 35,
            'stock'    => 30,
            'package'  => 'sachet',
            'brand_id' => $a->id,
        ]);

        Product::create([
            'name'     => 'Bar Soap',
            'price'    => 25,
            'stock'    => 45,
            'package'  => 'sachet',
            'brand_id' => $b->id,
        ]);

        Product::create([
            'name'     => 'Shampoo',
            'price'    => 7,
            'stock'    => 150,
            'package'  => 'sachet',
            'brand_id' => $c->id,
        ]);

        Product::create([
            'name'     => 'Sardines',
            'price'    => 28,
            'stock'    => 70,
            'package'  => 'plastic',
            'brand_id' => $a->id,
        ]);

        Product::create([
            'name'     => 'Cooking Oil',
            'price'    => 18,
            'stock'    => 35,
            'package'  => 'plastic',
            'brand_id' => $b->id,
        ]);

        Product::create([
            'name'     => 'Soy Sauce',
            'price'    => 10,
            'stock'    => 55,
            'package'  => 'sachet',
            'brand_id' => $c->id,
        ]);

        Product::create([
            'name'     => 'Bottled Water',
            'price'    => 15,
            'stock'    => 90,
            'package'  => 'bottle',
            'brand_id' => $b->id,
        ]);

        Product::create([
            'name'     => 'Biscuit',
            'price'    => 6,
            'stock'    => 100,
            'package'  => 'pack',
            'brand_id' => $a->id,
        ]);

        Product::create([
            'name'     => 'Cigarette',
            'price'    => 12,
            'stock'    => 60,
            'package'  => 'stick',
            'brand_id' => $c->id,
        ]);

        Product::create([
            'name'     => 'Egg',
            'price'    => 9,
            'stock'    => 120,
            'package'  => 'plastic',
            'brand_id' => $b->id,
        ]);

        Product::create([
            'name'     => 'Bubble Gum',
            'price'    => 2,
            'stock'    => 200,
            'package'  => 'plastic',
            'brand_id' => $a->id,
        ]);

        Product::create([
            'name'     => 'Maxi Candy',
            'price'    => 2,
            'stock'    => 200,
            'package'  => 'plastic',
            'brand_id' => $a->id,
        ]);

        Product::create([
            'name'     => 'Axion',
            'price'    => 35,
            'stock'    => 35,
            'package'  => 'sachet',
            'brand_id' => $a->id,
        ]);
    }
}

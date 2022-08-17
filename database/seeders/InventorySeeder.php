<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_art = Category::where('name', 'art')->first();
        $category_jewellery = Category::where('name','jewellery')->first();
        $category_clothing = Category::where('name', 'clothing')->first();

        $art = new Inventory();
        $art->name = 'painting';
        $art->description = 'copy of high quality painting';
        $art->quantity = '20';
        $art->category_id = '1';
        $art->save();
        $art->categories()->attach($category_art);

        $jewellery = new Inventory();
        $jewellery->name = 'jade necklace';
        $jewellery->description = 'A simple metal necklace with a small jade coloured gem';
        $jewellery->quantity = '15';
        $jewellery->category_id = '2';
        $jewellery->save();
        $jewellery->categories()->attach($category_jewellery);

        $clothing = new Inventory();
        $clothing->name = 'Marine Dress';
        $clothing->description = 'A strapless dress in a deep blue colour';
        $clothing->quantity = '18';
        $clothing->category_id = '3';
        $clothing->save();
        $clothing->categories()->attach($category_clothing);

    }
}

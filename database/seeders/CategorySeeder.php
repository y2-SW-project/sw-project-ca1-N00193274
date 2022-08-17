<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_art = new Category();
        $category_art->name = 'art';
        $category_art->description = 'art related products';
        $category_art->save();

        $category_jewellery = new Category();
        $category_jewellery->name = 'jewellery';
        $category_jewellery->description = 'rings, necklaces etc';
        $category_jewellery->save();

        $category_clothing = new Category();
        $category_clothing->name = 'clothing';
        $category_clothing->description = 'Clothing relaeted products';
        $category_clothing->save();


    }
}

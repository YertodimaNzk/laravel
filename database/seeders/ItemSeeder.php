<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
           'name' => 'Asparagus',
           'desc' => '',
           'price' => 10000,
           'image_link' => 'asparagus.jpg'
         ]);
         Item::create([
           'name' => 'Beans',
           'desc' => '',
           'price' => 15000,
           'image_link' => 'beand.jpg'
         ]);
         Item::create([
           'name' => 'Beansprouts',
           'desc' => '',
           'price' => 15000,
           'image_link' => 'beansprouts.jpg'
         ]);
         Item::create([
           'name' => 'Bitter Gourd',
           'desc' => '',
           'price' => 1,
           'image_link' => 'bittergourd.jpg'
         ]);
         Item::create([
           'name' => 'Broccoli',
           'desc' => '',
           'price' => 1,
           'image_link' => 'broccoli.jpg'
         ]);
         Item::create([
           'name' => 'Cabbages',
           'desc' => '',
           'price' => 1,
           'image_link' => 'cabbages.jpg'
         ]);
         Item::create([
           'name' => 'Carrots',
           'desc' => '',
           'price' => 1,
           'image_link' => 'carrots.jpg'
         ]);
         Item::create([
           'name' => 'Cauliflowers',
           'desc' => '',
           'price' => 1,
           'image_link' => 'cauliflowers.jpg'
         ]);
         Item::create([
           'name' => 'Cucumbers',
           'desc' => '',
           'price' => 1,
           'image_link' => 'cucumber.jpg'
         ]);
         Item::create([
           'name' => 'Eggplants',
           'desc' => '',
           'price' => 1,
           'image_link' => 'eggplants.jpg'
         ]);
         Item::create([
           'name' => 'Leek',
           'desc' => '',
           'price' => 1,
           'image_link' 'leek.jpg'
         ]);
         Item::create([
           'name' => 'Letuce',
           'desc' => '',
           'price' => 1,
           'image_link' => 'letuces.jpg'
         ]);
         Item::create([
           'name' => 'Potatoes',
           'desc' => '',
           'price' => 1,
           'image_link' => 'potatoes.jpg'
         ]);
         Item::create([
           'name' => 'Spinach',
           'desc' => '',
           'price' => 1,
           'image_link' => 'spinach.jpg'
         ]);
         Item::create([
           'name' => 'Tomatoes',
           'desc' => '',
           'price' => 1,
           'image_link' => 'tomatoes.jpg'
         ]);
         Item::create([
           'name' => 'Water Spinach',
           'desc' => '',
           'price' => 1,
           'image_link' => 'waterspinach.jpg'
         ]);
         Item::create([
            'name' => 'Yardlong Beans',
            'desc' => '',
            'price' => 1,
            'image_link' => 'yardlongbeans'
        ]);
    }
}
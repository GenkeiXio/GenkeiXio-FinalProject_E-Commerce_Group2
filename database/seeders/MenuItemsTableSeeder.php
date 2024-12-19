<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('menu_items')->insert([
            [
                'name' => 'Pancakes/Crepes with toppings',
                'price' => 35.00,
                'image' => 'css/PancakesCrepes with toppings',
                'rating' => 4
            ],
            [
                'name' => 'Egg Sandwiches',
                'price' => 25.00,
                'image' => 'css/img1.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Yummy Burgers',
                'price' => 40.00,
                'image' => 'css/Yummy Burgers.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Ground Beef Cheesy Nachos/Tacos',
                'price' => 75.00,
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Small Pancit/Bihon Guisado',
                'price' => 50.00,
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Longganisa',
                'price' => 60.00,
                'image' => 'css/img1.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Embutido',
                'price' => 80.00,
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Chicken Cordon Bleu',
                'price' => 80.00,
                'image' => 'css/img1.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Burger Steaks',
                'price' => 70.00,
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Chicken Tenders',
                'price' => 60.00,
                'image' => 'css/img3.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Hot Coffee',
                'price' => 20.00,
                'image' => 'css/img1.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Wintermelon Tea with black pearl',
                'price' => 50.00,
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Cold Caramel Coffee',
                'price' => 50.00,
                'image' => 'css/img1.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Fruit Smoothies',
                'price' => 60.00,
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Soda Drinks',
                'price' => 20.00,
                'image' => 'css/img1.jpg',
                'rating' => 4
            ]
        ]);
    }
}

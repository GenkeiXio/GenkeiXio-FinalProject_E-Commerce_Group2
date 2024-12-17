<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index($username)
    {
        // Simulated menu data
        $menuItems = [
            [
                'name' => 'Pancakes/Crepes with toppings',
                'price' => '₱35.00',
                'image' => 'css/img1.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Egg Sandwiches',
                'price' => '₱25.00',
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Yummy Burgers',
                'price' => '₱40.00',
                'image' => 'css/img3.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Ground Beef Cheesy Tacos',
                'price' => '₱75.00',
                'image' => 'css/img4.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Small Pancit/Bihon Guisado',
                'price' => '₱50.00',
                'image' => 'css/img5.jpg',
                'rating' => 4
            ],
        ];

        $lunchmenuItems = [
            [
                'name' => 'Longganisa',
                'price' => '₱60.00',
                'image' => 'css/img1.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Embutido',
                'price' => '₱80.00',
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Chicken Cordon Bleu',
                'price' => '₱80.00',
                'image' => 'css/img1.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Burger Steaks',
                'price' => '₱70.00',
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Chicken Tenders',
                'price' => '₱60.00',
                'image' => 'css/img3.jpg',
                'rating' => 4
            ],
        ];

        $drinksmenuItems = [
            [
                'name' => 'Hot Coffee',
                'price' => '₱20.00',
                'image' => 'css/img1.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Wintermelon Tea with black pearl',
                'price' => '₱50.00',
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Cold Caramel Coffee',
                'price' => '₱50.00',
                'image' => 'css/img1.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Fruit Smoothies',
                'price' => '₱60.00',
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Soda Drinks',
                'price' => '₱20.00',
                'image' => 'css/img1.jpg',
                'rating' => 4
            ],
        ];

        // Pass data to the view
        return view('menu', ['username' => $username, 'menuItems' => $menuItems, 'lunchmenuItems' => $lunchmenuItems, 'drinksmenuItems' => $drinksmenuItems,]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index($username = 'Guest')
    {
        // Simulated "Best Sellers" data
        $bestSellers = [
            [
                'name' => 'Pancakes/Crepes with toppings',
                'price' => '₱35.00',
                'image' => 'css/PancakesCrepes with toppings.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Chicken Cordon Bleu',
                'price' => '₱80.00',
                'image' => 'css/Chicken Cordon Bleu.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Cold Caramel Coffee',
                'price' => '₱50.00',
                'image' => 'css/Cold Caramel Coffee.jpg',
                'rating' => 4
            ]
        ];

        // Pass data to the view
        return view('homepage', ['username' => $username, 'bestSellers' => $bestSellers]);
    }
}
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
                'name' => 'Egg Sandwich',
                'price' => '$1.2',
                'image' => 'css/img1.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Tapsilog',
                'price' => '$1.2',
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Pancit Bihon',
                'price' => '$1.2',
                'image' => 'css/img3.jpg',
                'rating' => 4
            ]
        ];

        // Pass data to the view
        return view('homepage', ['username' => $username, 'bestSellers' => $bestSellers]);
    }
}
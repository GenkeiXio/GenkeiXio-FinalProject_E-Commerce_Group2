<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogRequests;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RestrictedAreaController;
use App\Http\Controllers\CartController;

Route::middleware(['web', LogRequests::class])->group(function () {

    // Login route at the root URL "/"
    Route::get('/', [LoginController::class, 'goTologin'])->name('goTologin');

    // Form submission route for homepage with username validation
    Route::post('/homepage', [LoginController::class, 'submit']);

    // Homepage, About Us, Menu, Contact Us routes with dynamic username
    Route::get('/homepage/{username}', [HomePageController::class, 'index'])->name('homepage');
    Route::get('/aboutus/{username}', [AboutUsController::class, 'index'])->name('aboutus');
    Route::get('/menu/{username}', [MenuController::class, 'index'])->name('menu');
    Route::get('/contactus/{username}', [ContactUsController::class, 'index'])->name('contactus');
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
    Route::post('/cart/remove', [CartController::class, 'removeFromCart']);

    // Route for restricted area with dynamic username
    Route::get('/restrictedArea/{username}', [RestrictedAreaController::class, 'index'])->name('restrictedArea');

    // Middleware for age verification, restricted access, or homepage access post-login
    Route::post('/homepage', [HomePageController::class, 'index'])->middleware(CheckAge::class);

    // Access Denied route
    Route::get('/accessDenied', [HomePageController::class, 'accessDenied'])->name('accessDenied');
    
});

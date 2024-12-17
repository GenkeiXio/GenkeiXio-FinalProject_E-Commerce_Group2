<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Get cart from session or initialize it
        $cart = session()->get('cart', []);

        // Retrieve item details from the request
        $itemId = $request->input('id');
        $itemName = $request->input('name');
        $itemPrice = $request->input('price');

        // Prepare the item to be added
        $item = [
            'id' => $itemId,
            'name' => $itemName,
            'price' => $itemPrice,
            'quantity' => 1, // Initialize with 1 quantity
        ];

        // Check if the item is already in the cart
        if (isset($cart[$itemId])) {
            $cart[$itemId]['quantity']++; // Increment quantity if item already exists
        } else {
            $cart[$itemId] = $item; // Add new item to cart
        }

        // Save updated cart to session
        session()->put('cart', $cart);

        return response()->json([
            'message' => 'Item added to cart successfully!',
            'cart' => $cart
        ]);
    }
}

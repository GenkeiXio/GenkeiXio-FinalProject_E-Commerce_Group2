<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function goTologin($userId = null)
    {
        $username = 'Guest';
        
        // If a user ID is provided, fetch or customize data for that user
        if ($userId) {
            // Placeholder logic; in a real app, fetch user info from a database.
            $username = "User{$userId}";
        }

        return view('goTologin', ['username' => $username])->with('hideNavAndFooter', true);
    }

    public function submit(Request $request)
    {
        $request->validate([
            'username' => 'required|alpha'
        ], [
            'username.alpha' => 'The username should only contain alphabetic characters.',
            'username.required' => 'The username field is required.'
        ]);

        $username = $request->input('username', 'Guest');
        return redirect("/homepage/$username");
    }
}
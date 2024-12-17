<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index($username)
    {
        return view('aboutus', ['username' => $username]);
    }
}

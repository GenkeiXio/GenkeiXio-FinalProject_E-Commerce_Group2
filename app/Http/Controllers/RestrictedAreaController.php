<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestrictedAreaController extends Controller
{
    public function index($username)
    {
        return view('restrictedArea', ['username' => $username]);
    }
}

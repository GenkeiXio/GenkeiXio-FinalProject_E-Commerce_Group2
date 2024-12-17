<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index($username)
    {
        return view('contactus', ['username' => $username]);
    }
}

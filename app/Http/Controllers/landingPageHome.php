<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingPageHome extends Controller
{
    public function index()
    {
        return view('landingPage.home');
    }
}

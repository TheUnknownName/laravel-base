<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function firstLogin()
    {
        return view('layout.maintenance');
    }
}

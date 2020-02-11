<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('Pages.Login');
    }
    public function register()
    {
        return view('Pages.registration');
    }
}

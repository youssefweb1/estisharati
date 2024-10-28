<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function landing()
    {
        return Auth::check() ? redirect()->route('home') : view('landing');
    }

    public function home()
    {
        return Auth::check() ? view('home') : redirect()->route('landing');
    }

    public function index()
    {
        return Auth::check() ? redirect()->route('home') : redirect()->route('landing');
    }
}

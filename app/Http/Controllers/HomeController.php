<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Redirect to home if authenticated, otherwise redirect to landing
    public function index()
    {
        return Auth::check() ? redirect()->route('home') : redirect()->route('landing');
    }

    // Redirect to home if authenticated, otherwise show the landing page
    public function landing()
    {
        return Auth::check() ? redirect()->route('home') : view('landing');
    }

    // Show the home page if authenticated, otherwise redirect to landing
    public function home()
    {
        return Auth::check() ? view('home') : redirect()->route('landing');
    }
}

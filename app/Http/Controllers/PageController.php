<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Home Page
    public function home()
    {
        return view('pages.home');
    }

    // Menu Page
    public function menu()
    {
        return view('pages.menu');
    }

    // Contact Page
    public function contact()
    {
        return view('pages.contact');
    }
}
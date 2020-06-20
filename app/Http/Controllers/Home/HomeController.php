<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
     return view('frontend.home');
    }

    public function register()
    {
     return view('frontend.register');
    }

    public function login()
    {
     return view('frontend.login');
    }

}

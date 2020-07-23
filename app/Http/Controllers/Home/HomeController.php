<?php

namespace App\Http\Controllers\Home;

Use Alert;
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

    public function test()
    {
        Alert::success('Success Title', 'Success Message');
        return view('welcome');
    }

}

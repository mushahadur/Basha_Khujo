<?php

namespace App\Http\Controllers\WebsiteContoller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('website.home.index');
    }
    public function signIn(){
        return view('website.customSignUp.login');
    }
    public function signUp(){
        return view('website.customSignUp.register');
    }

}

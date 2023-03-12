<?php

namespace App\Http\Controllers\WebsiteContoller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function dhakaIndex(){
        return view('website.allDivision.Dhaka.allDhakaCity.index');
    }

    public function chattogramDivision(){
        return view('website.allDivision.Chattogram.chattogram');
    }





    public function detail(){
        return view('website.allDivision.detail');
    }

}

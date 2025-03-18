<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutUs(){
        return view('home.about');
    }

    public function testi(){
        return view('home.testimonial');
    }

    public function contact(){
        return view('home.contact');
    }
}

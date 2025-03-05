<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function merchant(){
        return view('dashboard.merchant');
    }
    public function admin(){
        return view('dashboard.admin');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class baseController extends Controller
{
    public function dashboard(){
        return view('dashboard.dashboard');
    }
}

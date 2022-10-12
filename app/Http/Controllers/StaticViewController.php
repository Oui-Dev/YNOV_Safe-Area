<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticViewController extends Controller
{
    // Homepage
    public function homepage(){
        return view('pages/homepage');
    }
}

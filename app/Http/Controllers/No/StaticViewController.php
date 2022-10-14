<?php

namespace App\Http\Controllers\No;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticViewController extends Controller
{
    // Homepage
    public function homepage()
    {
        return view('pages/homepage');
    }

    // Changelog
    public function changelog()
    {
        return view('pages/changelog');
    }
}

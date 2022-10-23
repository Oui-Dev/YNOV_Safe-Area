<?php

namespace App\Http\Controllers\No;

use App\Http\Controllers\Controller;
use App\Models\Version;
use Illuminate\Http\Request;

class StaticViewController extends Controller
{
    // Homepage
    public function homepage()
    {
        return view('pages/No/homepage');
    }

    public function prices()
    {
        return view('pages/No/prices');
    }

    public function features()
    {
        return view('pages/No/features');
    }

    public function contact()
    {
        return view('pages/No/contact');
    }

    // Changelog
    public function changelog()
    {
        $versions = Version::get();
        return view('pages/No/changelog', ['versions' => $versions]);
    }
}

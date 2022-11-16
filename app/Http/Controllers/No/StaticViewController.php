<?php

namespace App\Http\Controllers\No;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Version;

class StaticViewController extends Controller
{
    // Homepage
    public function homepage()
    {
        return view('pages/No/homepage');
    }

    // Prices page
    public function prices()
    {
        return view('pages/No/prices');
    }

    // Maintenance page
    public function maintenance() {
        return view('errors/maintenance');
    }

    // TOS page
    public function showLegal()
    {
        return view('pages/No/legal');
    }

    // Changelog
    public function changelog()
    {
        $versions = Version::get();
        return view('pages/No/changelog', ['versions' => $versions]);
    }
}

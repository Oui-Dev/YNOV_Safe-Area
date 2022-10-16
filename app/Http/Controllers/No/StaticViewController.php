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
        return view('pages/homepage');
    }

    // Changelog
    public function showChangelog()
    {
        $versions = Version::get();
        return view('pages/No/changelog', ['versions' => $versions]);
    }
}

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
        $changes = [
            [
                'id' => 1,
                'version' => ' 0.0.1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'date' => today()
            ],
            [
                'id' => 2,
                'version' => ' 0.2.17',
                'content' => 'test',
                'date' => today()
            ],
            [
                'id' => 3,
                'version' => '1.0.0',
                'content' => 'TODO: connect to database',
                'date' => today()
            ],
            [
                'id' => 3,
                'version' => '1.0.0',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'date' => today()
            ],
            [
                'id' => 3,
                'version' => '1.0.0',
                'content' => 'TODO: connect to database',
                'date' => today()
            ],

        ];
        return view('pages/changelog', ['changes' => $changes]);
    }
}

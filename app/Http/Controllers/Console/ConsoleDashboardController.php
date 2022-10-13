<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsoleDashboardController extends Controller
{
    public function index() {
        return inertia('Console/Index', [
            'pageName' => 'Console',
        ]);
    }
}

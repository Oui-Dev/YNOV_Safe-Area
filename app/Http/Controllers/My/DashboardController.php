<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return inertia('My/Index', [
            'pageName' => 'My',
        ]);
    }
}

<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {
        return inertia('My/Index');
    }
}

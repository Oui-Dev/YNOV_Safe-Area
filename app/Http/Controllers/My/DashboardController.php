<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index() {
        return inertia('My/Index');
    }
}

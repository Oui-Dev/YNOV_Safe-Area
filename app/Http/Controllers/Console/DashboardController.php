<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:root');
    }

    public function index() {
        return Inertia::render('Console/auth/dashboard/index', [
            'pageName' => 'Console',
            'route.logout' => route('console.auth.logout')
        ]);
    }
}

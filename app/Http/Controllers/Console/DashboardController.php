<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use App\Models\Complain;
use App\Models\Company;
use App\Models\User;

class DashboardController extends Controller
{
    public function index() {
        $companies = Company::orderBy('created_at', 'desc')
            ->take(6)->get();
        

        $stats = [
            'totalUsers' => User::count(),
            'totalComplains' => Complain::where('deleted_at', NULL)->count(),
            'totalCompany' => Company::count(),
        ];

        return inertia('Console/Index', [
            'stats' => $stats,
            'companies' => $companies,
        ]);
    }
}

<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use App\Models\Complain;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index() {
        return inertia('My/Index');
    }


    public function annuaire() {
        $users = User::paginate(20);
        return inertia('My/Annuaire', [
            'users' => $users,
        ]);
    }
}

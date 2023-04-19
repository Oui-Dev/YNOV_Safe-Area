<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use App\Models\Complain;

class DashboardController extends Controller
{
    public function index() {
        $user = auth()->user();
        $complains = $user->hasrole("admin")
            ? Complain::select('*')
            : $user->complains();
        
        $complains = $complains
            ->with('assignedUser')->with('status')
            ->where('deleted_at', NULL)
            ->where('assigned_to', NULL)
            ->where('status_id', 1)
            ->orderBy('created_at', 'desc')
            ->take(6)->get();

        $complains = $complains->map(function($complain) {
            if(!$complain->is_anonymous) {
                $complain->load('user');
            } else {
                $complain->user_id = null;
            }
            return $complain;
        });

        $stats = [
            'totalUsers' => $user->company->users()->count(),
            'totalComplains' => $user->company->users()->with('complains')->get()->sum(function($user) {
                return $user->complains->count();
            }),
            'totalNotAssignedComplains' => $user->company->users()->with('complains')->get()->sum(function($user) {
                return $user->complains->where('assigned_to', NULL)->where('status_id', 1)->count();
            }),
        ];

        $lastComplain = $complains->pop();

        return inertia('My/Index', [
            'complains' => $complains,
            'stats' => $stats,
            'lastComplain' => $lastComplain,
        ]);
    }
}

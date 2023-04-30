<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use App\Models\Complain;
use App\Models\ComplainChat;

class DashboardController extends Controller
{
    public function index() {
        $user = auth()->user();

        if($user->hasrole("admin")) {
            $complains = Complain::whereHas('user', function($query) use ($user) {
                $query->where('company_id', $user->company_id);
            });
        } else {
            $complains = $user->complains();
        }
        
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
                return $user->complains->where('deleted_at', NULL)->count();
            }),
            'totalNotAssignedComplains' => $user->company->users()->with('complains')->get()->sum(function($user) {
                return $user->complains->where('deleted_at', NULL)->where('assigned_to', NULL)->where('status_id', 1)->count();
            }),
        ];

        $lastComplain = $complains->pop();

        $complainChat = ComplainChat::whereHas('complain', function($query) use ($user) {
            $query->whereHas('user', function($query) use ($user) {
                $query->where('company_id', $user->company_id);
            });
        })->orderBy('created_at', 'desc')->with('complain')->first();

        return inertia('My/Index', [
            'complains' => $complains,
            'stats' => $stats,
            'lastComplain' => $lastComplain,
            'complainChat' => $complainChat,
        ]);
    }
}

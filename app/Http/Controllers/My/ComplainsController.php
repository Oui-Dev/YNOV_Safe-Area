<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use App\Models\Complain;
use http\Client\Curl\User;
class ComplainsController extends Controller
{
    public function list() {
        $user = auth()->user();
        $complains = $user->hasPermissionTo("admin_access")
            ? Complain::select('*')
            : $user->complains();

        $complains = $complains->with('user')->with('assignedUser')->paginate(20);
        return inertia('My/Complains/List', [
            'complains' => $complains,
        ]);
    }

}

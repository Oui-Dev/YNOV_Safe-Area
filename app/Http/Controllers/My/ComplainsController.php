<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use App\Models\Complain;

class ComplainsController extends Controller
{
    public function list() {
        $complains = Complain::with('user')->with('assignedUser')->paginate(20);
        return inertia('My/Complains/List', [
            'complains' => $complains,
        ]);
    }

    public function create() {
        return inertia('My/Complains/Create');
    }


    






}

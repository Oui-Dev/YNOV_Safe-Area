<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HelpDeskController extends Controller
{
    public function helpDesk() {
        return Inertia::render('My/HelpDesk', [
            'pageName' => 'HelpDesk',
        ]);
    }
}

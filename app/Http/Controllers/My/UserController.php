<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return inertia('My/User/Index',[
            'pageName' => 'Profile',
        ]);
    }
}

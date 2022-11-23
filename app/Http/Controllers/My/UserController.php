<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        return inertia('My/User/user');
    }
}

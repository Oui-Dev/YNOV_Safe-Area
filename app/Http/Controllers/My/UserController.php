<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use App\Mail\ConfirmEmail;
use App\Models\User;
use Redirect;

class UserController extends Controller
{
    public function create() {
        return inertia('My/Users/Create');
    }


    public function store() {
        $data = request()->validate([
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'phone' => ['required' , 'int' , 'main:10'],
            'password' => ['required', 'confirmed', Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers(),]
        ]);

        $user = User::create([
            'password' => $data['password'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phone' => $data['phone'],
        ]);
    }
}

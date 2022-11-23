<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function profil(){
        return inertia('My/Users/Profil',
            ['user' => auth()->user()]
        );
    }

    public function editProfil(){
        $data = request()->validate([
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers(),
            ],
            'mailperso' => ['required', 'string', 'max:255'],
            'mailpro' => ['required', 'string', 'max:255'],
            ]);

        dd($data);
    }
}

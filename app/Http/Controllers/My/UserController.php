<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;
use App\Mail\ConfirmEmail;
use App\Models\User;
use Illuminate\Support\Str;
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
            'phone' => ['bail','required','max:20','min:10','regex:/^([0-9\s\-\+\(\)]*)$/'],
            'mail' => ['required','email:rfc,dns,spoof','max:255'],
            'mailpro' => ['required','email:rfc,dns,spoof','max:255'],
            'identifiant' => ['required', 'string', 'max:255',Rule::unique('users')],
            'sexe' => ["required", "int"],
        ]);

        $user = User::create([
            'company_id' => Auth()->user()->company_id,
            'password' => Str::random(30),
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phone' => $data['phone'],
            'sex' => $data['sexe'],
            'personal_email' => $data['mail'],
            'professional_email' => $data['mailpro'],
            'identifiant' => $data['identifiant'],
            'reference' => Str::uuid(),
        ]);



        //Mail::to($user->email)->send(new ConfirmEmail($user));
        return Redirect::route('my.auth.dashboard.index');
    }

    public function profil(){
        return inertia('My/Users/Profil', [
            'user' => auth()->user(),
        ]);
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

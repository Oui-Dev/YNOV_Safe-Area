<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
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
        return redirect()->route('my.auth.annuaire')->with('toast', [
            'type' => 'success',
            'message' => "L'utilisateur a bien été crée.",
        ]);
    }



    public function edit(User $user) {
        return inertia('My/Users/Edit', [
            'user' => $user,
        ]);
    }

    public function editPut(User $user) {
        
        $data = request()->validate([
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'phone' => ['bail','required','max:20','min:10','regex:/^([0-9\s\-\+\(\)]*)$/'],
            'mail' => ['required','email:rfc,dns,spoof','max:255'],
            'mailpro' => ['required','email:rfc,dns,spoof','max:255'],
            'identifiant' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'sex' => ["required", "int"],
        ]);
    
        $user->update([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phone' => $data['phone'],
            'sex' => $data['sex'],
            'personal_email' => $data['mail'],
            'professional_email' => $data['mailpro'],
            'identifiant' => $data['identifiant'],
        ]);
        
        $user->save();

        return redirect()->route('my.auth.users.edit', $user->reference)->with('toast', [
            'type' => 'success',
            'message' => "L'utilisateur a bien été modifié.",
        ]);
    }

    public function profil(){
        return inertia('My/Users/Profil', [
            'user' => auth()->user(),
        ]);
    }

    public function editProfil(){
        $user = auth()->user();

        $data = request()->validate([
            'lastname' => ['string', 'max:255'],
            'firstname' => ['string', 'max:255'],
            'emailperso' => ['string', 'max:255'],
            'emailpro' => ['string', 'max:255'],
        ]);

        $user->update([
            'lastname' => $data['lastname'],
            'firstname' => $data['firstname'],
            'personal_email' => $data['emailperso'],
            'professional_email' => $data['emailpro']
        ]);

        if($user->save()){
            return redirect()->route('my.auth.dashboard.profil')->with('toast', [
                'type' => 'success',
                'message' => 'Enregistrer avec succès.',
            ]);
        }
        else{
            return Redirect::route('my.auth.dashboard.profil')->with('toast', [
                'type' => 'error',
                'message' => 'Erreur lors de l\'enregistrement.',
            ]);
        }
    }

    public function editPassword(){
        $user = auth()->user();

        $data = request()->validate([
            'old_password' => ['required', 'string'],
            'password' => ['required', 'confirmed', Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
            ],
        ]);

        if(!Hash::check($data['old_password'], $user->password)) {
            return Redirect::route('my.auth.dashboard.profil')->with('toast', [
                'type' => 'error',
                'message' => 'Ancien mot de passe incorrect',
            ]);
        }
        
        $user->password = $data['password'];
        if($user->save()){
            return redirect()->route('my.auth.dashboard.profil')->with('toast', [
                'type' => 'success',
                'message' => 'Enregistrer avec succès.',
            ]);
        }
        else{
            return Redirect::route('my.auth.dashboard.profil')->with('toast', [
                'type' => 'error',
                'message' => 'Erreur lors de l\'enregistrement.',
            ]);
        }
    }
}

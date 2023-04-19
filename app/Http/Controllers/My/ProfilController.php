<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Redirect;


class ProfilController extends Controller
{
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
            return redirect()->back()->with('toast', [
                'type' => 'success',
                'message' => 'Enregistrer avec succès.',
            ]);
        }
        else{
            return redirect()->back()->with('toast', [
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
            return redirect()->back()->with('toast', [
                'type' => 'error',
                'message' => 'Ancien mot de passe incorrect',
            ]);
        }
        
        $user->password = $data['password'];
        if($user->save()){
            return redirect()->back()->with('toast', [
                'type' => 'success',
                'message' => 'Enregistrer avec succès.',
            ]);
        }
        else{
            return redirect()->back()->with('toast', [
                'type' => 'error',
                'message' => 'Erreur lors de l\'enregistrement.',
            ]);
        }
    }
}

<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
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
            'identifiant' => ['required', 'string', 'max:255',Rule::unique('users')->ignore($user->id)],
            'sex' => ["required", "int"],
        ]);

        $user->update([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phone' => $data['phone'],
            'sex' => $data['sexe'],
            'personal_email' => $data['mail'],
            'professional_email' => $data['mailpro'],
            'identifiant' => $data['identifiant'],
        ]);
        $user->save();
        return redirect()->route('my.auth.users.edit', $user->reference)->with('success', 'Utilisateur modifié avec succès');
    }

}

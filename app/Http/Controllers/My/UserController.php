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
    public function annuaire() {
        $currentUser = auth()->user();
        $users = $currentUser->hasRole('admin')
            ? User::paginate(10)
            : $currentUser->company->users()->paginate(10);

        return inertia('My/Users/Annuaire', [
            'users' => $users,
        ]);
    }

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
            'identifiant' => ['required', 'string', 'max:255', Rule::unique('users')],
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

    public function delete(User $user) {
        $user->delete();
        return redirect()->back()->with('toast', [
            'type' => 'success',
            'message' => "L'utilisateur a bien été supprimé.",
        ]);
    }
}

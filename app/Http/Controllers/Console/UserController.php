<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use App\Mail\NewUserEmail;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function list() {
        return inertia('Console/Users/List', [
            'users' => User::paginate(10),
        ]);
    }

    public function create() {
        $roles = ['admin', 'my'];
        return inertia('Console/Users/Add', [
            'roles' => $roles,
        ]);
    }

    public function store() {
        $data = request()->validate([
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'phone' => ['bail','required','max:20','min:10','regex:/^([0-9\s\-\+\(\)]*)$/'],
            'mail' => ['required','email:rfc,dns,spoof','max:255'],
            'mailpro' => ['required','email:rfc,dns,spoof','max:255'],
            'sex' => ["required", "int"],
            'identifiant' => ['required', 'string', 'max:255', Rule::unique('users')],
            'userRole' => ['required', 'string', 'max:255', Rule::in(['admin', 'my'])],
        ]);
        $password = Str::random(15);

        $user = User::create([
            'password' => $password,
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phone' => $data['phone'],
            'sex' => $data['sex'],
            'personal_email' => $data['mail'],
            'professional_email' => $data['mailpro'],
            'identifiant' => $data['identifiant'],
            'reference' => Str::uuid(),
        ]);
        $user->assignRole($data['userRole']);
        $user->save();

        Mail::to($user->professional_email)->send(new NewUserEmail($user, $password));

        return redirect()->route('console.auth.users.list')->with('toast', [
            'type' => 'success',
            'message' => "L'utilisateur a bien été crée.",
        ]);
    }

    public function edit(User $user) {
        $roles = ['admin', 'my'];
        $user->roles = $user->getRoleNames();
        
        return inertia('Console/Users/Edit', [
            'user' => $user,
            'roles' => $roles,
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

        return redirect()->route('console.auth.users.edit', $user->reference)->with('toast', [
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

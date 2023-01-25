<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use App\Models\Company;

class CompanyController extends Controller
{
    public function create()
    {
        return Inertia('Console/Companies/Create');
    }

    public function store() {
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'address_id' => ['required', 'string', 'max:255'],
            'city_id' => ['required', 'string', 'max:255'],
            'siret' => ['required', 'string', 'max:255'],
            'siren' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
        ]);

        Company::create([
            'name' => $data['name'],
            'address_id' => $data['address_id'],
            'city_id' => $data['city_id'],
            'siret' => $data['siret'],
            'siren' => $data['siren'],
            'phone' => $data['phone'],
            'email' => $data['email'],
        ]);

        return redirect()->route('console.auth.companies.list')->with('toast', [
            'type' => 'success',
            'message' => "L'utilisateur a bien été crée.",
        ]);
    }

    public function list() {
        $companies = Company::paginate(20);
        return inertia('Console/Companies/List', [
            'companies' => $companies,
        ]);
    }
}

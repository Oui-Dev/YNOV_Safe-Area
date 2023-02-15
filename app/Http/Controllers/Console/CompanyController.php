<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use App\Models\Company;

class CompanyController extends Controller
{
    public function list() {
        $companies = Company::paginate(10);

        return inertia('Console/Companies/List', [
            'companies' => $companies,
        ]);
    }

    public function create() {
        return Inertia('Console/Companies/Add');
    }

    public function store() {
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string', 'max:255'],
            'zip_code' => ['required', 'string', 'max:255'],
            'siret' => ['required', 'string', 'max:255'],
            'siren' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
        ]);

        Company::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'city' => $data['city'],
            'zip_code' => $data['zip_code'],
            'siret' => $data['siret'],
            'siren' => $data['siren'],
            'phone' => $data['phone'],
            'email' => $data['email'],
        ]);

        return redirect()->route('console.auth.companies.list')->with('toast', [
            'type' => 'success',
            'message' => "L'entreprise a bien été crée.",
        ]);
    }

    public function edit(Company $company) {
        return inertia('Console/Companies/Edit', [
            'company' => $company,
        ]);
    }

    public function editPut(Company $company) {
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string', 'max:255'],
            'zip_code' => ['required', 'string', 'max:255'],
            'siret' => ['required', 'string', 'max:255'],
            'siren' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
        ]);

        $company->update([
            'name' => $data['name'],
            'address' => $data['address'],
            'city' => $data['city'],
            'zip_code' => $data['zip_code'],
            'siret' => $data['siret'],
            'siren' => $data['siren'],
            'phone' => $data['phone'],
            'email' => $data['email'],
        ]);

        return redirect()->route('console.auth.companies.list')->with('toast', [
            'type' => 'success',
            'message' => "L'entreprise a bien été modifiée.",
        ]);
    }

    public function delete(Company $company) {
        $company->delete();

        return redirect()->back()->with('toast', [
            'type' => 'success',
            'message' => "L'entreprise a bien été supprimé.",
        ]);
    }
}

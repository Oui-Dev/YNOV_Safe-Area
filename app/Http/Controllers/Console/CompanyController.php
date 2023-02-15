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

        $firstPart = sprintf("%03s", base_convert(mt_rand(0, 46656), 10, 36));
        $secondPart = sprintf("%03s", base_convert(mt_rand(0, 46656), 10, 36));
        $companyRef = $firstPart . $secondPart;

        Company::create([
            'name' => $data['name'],
            'address_id' => $data['address_id'],
            'city_id' => $data['city_id'],
            'siret' => $data['siret'],
            'siren' => $data['siren'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'reference' => $companyRef,
            
        ]);

        return redirect()->route('console.auth.companies.list')->with('toast', [
            'type' => 'success',
            'message' => "L'entreprise a bien été crée.",
        ]);
    }

    public function list() {
        $companies = Company::paginate(20);
        return inertia('Console/Companies/List', [
            'companies' => $companies,
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
            'address_id' => ['required', 'string', 'max:255'],
            'siret' => ['required', 'string', 'max:255'],
            'siren' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
        ]);

        $company->update([
            'name' => $data['name'],
            'address_id' => $data['address_id'],
            'siret' => $data['siret'],
            'siren' => $data['siren'],
            'phone' => $data['phone'],
            'email' => $data['email'],
        ]);

        $company->save();

        return redirect()->route('console.auth.companies.list')->with('toast', [
            'type' => 'success',
            'message' => "L'entreprise a bien été modifiée.",
        ]);
    }

}

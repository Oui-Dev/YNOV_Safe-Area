<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'compagny_id'=>null,
            'label'=>'Administrateur',
            'is_system'=>now(),
        ]);
        Role::create([
            'compagny_id'=>null,
            'label'=>'Administrateur entreprise',
            'is_system'=>now(),
        ]);
        Role::create([
            'compagny_id'=>null,
            'label'=>'Responsable entreprise',
            'is_system'=>now(),
        ]);
    }
}

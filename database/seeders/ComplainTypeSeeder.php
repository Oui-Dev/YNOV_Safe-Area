<?php

namespace Database\Seeders;

use App\Models\ComplainType;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class ComplainTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComplainType::create([
            'name' => 'Harcélement',
            'slug' => 'harcelement',
        ]);
        ComplainType::create([
            'name' => 'Discrimination',
            'slug' => 'discrimination',
        ]);
        ComplainType::create([
            'name' => 'Pression',
            'slug' => 'pression',
        ]);
    }
}

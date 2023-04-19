<?php

namespace Database\Seeders;

use App\Models\ComplainType;
use Illuminate\Database\Seeder;

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
            'name' => 'Autres',
            'slug' => 'autres',
        ]);
    }
}

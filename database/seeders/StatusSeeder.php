<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'name' => 'Nouveau',
            'slug' => 'nouveau',
            'color' => 'bg-green-600'
        ]);

        Status::create([
            'name' => 'Attribué',
            'slug' => 'attribue',
            'color' => 'bg-blue-600'
        ]);

        Status::create([
            'name' => 'En cours',
            'slug' => 'en-cours',
            'color' => 'bg-yellow-600'
        ]);

        Status::create([
            'name' => 'Terminé',
            'slug' => 'termine',
            'color' => 'bg-slate-600'
        ]);

        Status::create([
            'name' => 'Annulé',
            'slug' => 'annule',
            'color' => 'bg-gray-600'
        ]);

        Status::create([
            'name' => 'Clos',
            'slug' => 'clos',
            'color' => 'bg-gray-600'
        ]);
    }
}

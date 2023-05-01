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
            'color' => '#16A34A'
        ]);

        Status::create([
            'name' => 'Attribué',
            'slug' => 'attribue',
            'color' => '#2563EB'
        ]);

        Status::create([
            'name' => 'En cours',
            'slug' => 'en-cours',
            'color' => '#CA8A04'
        ]);

        Status::create([
            'name' => 'Terminé',
            'slug' => 'termine',
            'color' => '#334155'
        ]);

        Status::create([
            'name' => 'Annulé',
            'slug' => 'annule',
            'color' => '#6B7280'
        ]);

        Status::create([
            'name' => 'Clos',
            'slug' => 'clos',
            'color' => '#6B7280'
        ]);
    }
}

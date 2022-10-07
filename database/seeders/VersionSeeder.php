<?php

namespace Database\Seeders;

use App\Models\Version;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Version::create([
            'name'=>'TEST0',
            'generation'=>0,
            'revision'=>0,
            'correction'=>1,
            'changelog'=>"Version test",
            'archived_at'=>now()
        ]);
        Version::create([
            'name'=>'BETA1',
            'generation'=>0,
            'revision'=>1,
            'correction'=>1,
            'changelog'=>"Initialisation du projet"
        ]);
    }
}

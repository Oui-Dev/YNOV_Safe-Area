<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CompanySeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            VersionSeeder::class,
            LicenceSeeder::class,
        ]);
        Company::factory()->count(100)->create();
        User::factory()->count(500)->create();
    }
}

<?php

namespace Database\Seeders;

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
            RoleSeeder::class,
            VersionSeeder::class,
        ]);

        if(config('app.env') === 'local') {
            Company::factory()->count(23)->create();
            User::factory()->count(93)->create();

            $this->call([
                UserSeeder::class,
            ]);
        }
    }
}

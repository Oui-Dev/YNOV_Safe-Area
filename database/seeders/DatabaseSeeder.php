<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use App\Models\Complain;
use App\Models\HelpdeskSupport;
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
            StatusSeeder::class,
            ComplainTypeSeeder::class,
        ]);

        if(config('app.env') === 'local') {
            $this->call([
                UserSeeder::class,
            ]);

            Company::factory()->count(23)->create();
            User::factory()->count(93)->create();
            Complain::factory()->count(42)->create();
            HelpdeskSupport::factory()->count(13)->create();
        }
    }
}

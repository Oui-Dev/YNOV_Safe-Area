<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'reference'=>Uuid::uuid4(),
            'name'=>"Hackenathon-Systems",
            'address_id'=>"27 Rue Raoul Servant",
            'city_id'=>69007,
            'phone'=>'0102030405',
            'email'=>'Hackenathon.systems@gmail.com',
            'siren'=>'',
            'siret'=>'',
            'email_verified_at'=>now(),
            'published_at'=>now(),
        ]);
    }
}

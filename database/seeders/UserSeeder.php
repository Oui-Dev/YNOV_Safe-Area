<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = User::create([
            'reference'=>Uuid::uuid4(),
            'sex'=>0,
            'firstname'=>'Super',
            'lastname'=>'Utilisateur',
            'personal_email'=>'hackenathon.systems@gmail.com',
            'professional_email'=>'hackenathon.systems@gmail.com',
            'personal_email_verified_at'=>now(),
            'professional_email_verified_at'=>now(),
            'phone'=>'0102030405',
            'compagny_id'=>Company::first()->id,
            'identifiant'=>'admin',
            'password'=>Hash::make('Azerty@123'),
        ])->id;

       $user = User::find($id);
       $user->givePermissionTo('root');
    }
}

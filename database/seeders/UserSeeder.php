<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
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
        $root = User::create([
            'reference'=>Uuid::uuid4(),
            'sex'=>0,
            'firstname'=>'Utilisateur',
            'lastname'=>'Root',
            'personal_email'=>'hackenathon.systems@gmail.com',
            'professional_email'=>'hackenathon.systems@gmail.com',
            'personal_email_verified_at'=>now(),
            'professional_email_verified_at'=>now(),
            'phone'=>'0102030405',
            'identifiant'=>'root',
            'password'=>Hash::make('Azerty@123'),
        ]);

        $admin = User::create([
            'reference'=>Uuid::uuid4(),
            'sex'=>0,
            'firstname'=>'Utilisateur',
            'lastname'=>'Admin',
            'personal_email'=>'hackenathon.systems@gmail.com',
            'professional_email'=>'hackenathon.systems@gmail.com',
            'personal_email_verified_at'=>now(),
            'professional_email_verified_at'=>now(),
            'phone'=>'0102030405',
            'company_id'=>Company::first()->id,
            'identifiant'=>'admin',
            'password'=>Hash::make('Azerty@123'),
        ]);

        $user = User::create([
            'reference'=>Uuid::uuid4(),
            'sex'=>1,
            'firstname'=>'Utilisateur',
            'lastname'=>'My',
            'personal_email'=>'safearea.app@gmail.com',
            'professional_email'=>'safearea.app@gmail.com',
            'personal_email_verified_at'=>now(),
            'professional_email_verified_at'=>now(),
            'phone'=>'0102030406',
            'company_id'=>Company::first()->id,
            'identifiant'=>'user',
            'password'=>Hash::make('Azerty@123'),
        ]);

        $root->assignRole('root');
        $admin->assignRole('admin');
        $user->assignRole('my');

        $root->save();
        $admin->save();
        $user->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Licence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class LicenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = Licence::create([
            'reference'=>Uuid::uuid4(),
            'title'=>'Licence TPE',
            'description'=>'Licence pour entreprise TPE de 1 à 9 utilisateurs',
            'min'=>1,
            'max'=>9,
            'duration'=>12,
            'is_private'=>false,
            'is_premium'=>false,
            'published_at'=>now(),
            'price'=>29
        ])->id;
        // Licence::find($id)->outils()->attach([1,2,6,7,8,9,10]);

        $id = Licence::create([
            'reference'=>Uuid::uuid4(),
            'title'=>'Licence PME',
            'description'=>'Licence pour entreprise PME de 10 à 70 utilisateurs',
            'min'=>10,
            'max'=>70,
            'duration'=>12,
            'is_private'=>false,
            'is_premium'=>true,
            'published_at'=>now(),
            'price'=>89
        ])->id;

        $id = Licence::create([
            'reference'=>Uuid::uuid4(),
            'title'=>'Licence GE',
            'description'=>'Licence pour entreprise PME de 71 à 250 utilisateurs',
            'min'=>71,
            'max'=>250,
            'duration'=>12,
            'is_private'=>false,
            'is_premium'=>true,
            'published_at'=>now(),
            'price'=>139
        ])->id;

        $id = Licence::create([
            'reference'=>Uuid::uuid4(),
            'title'=>'Licence Sup',
            'description'=>'Licence supplémentaire pour 1 utilisateur',
            'min'=>1,
            'max'=>1,
            'duration'=>12,
            'is_private'=>false,
            'is_premium'=>false,
            'published_at'=>now(),
            'price'=>3
        ])->id;
    }
}

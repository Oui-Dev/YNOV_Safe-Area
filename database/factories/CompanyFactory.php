<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'reference'=>Uuid::uuid4(),
            'name'=>fake()->unique()->company(),
            'address_id'=>fake()->address(),
            'city_id'=>fake()->randomNumber(5),
            'phone'=>fake()->phoneNumber(),
            'email'=>fake()->unique()->companyEmail(),
            'siren'=>fake()->unique()->ean8(),
            'siret'=>fake()->unique()->ean13(),
            'email_verified_at'=>now(),
            'published_at'=>now(),
            ];
    }
}

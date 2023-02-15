<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name'=>fake()->unique()->company(),
            'address'=>fake()->streetAddress(),
            'city'=>fake()->city(),
            'zip_code'=>fake()->postcode(),
            'phone'=>fake()->phoneNumber(),
            'email'=>fake()->unique()->companyEmail(),
            'siren'=>fake()->unique()->ean8(),
            'siret'=>fake()->unique()->ean13(),
            'published_at'=>now(),
        ];
    }
}

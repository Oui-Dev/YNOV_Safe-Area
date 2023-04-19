<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
//        $identifiant = substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', ceil(50/strlen($x)) )),1,6);
        return [
            'reference'=>Uuid::uuid4(),
            'sex'=>0,
            'firstname'=>fake()->firstName(),
            'lastname'=>fake()->lastName(),
            'personal_email'=>fake()->unique()->email(),
            'professional_email'=>fake()->unique()->companyEmail(),
            'personal_email_verified_at'=>now(),
            'professional_email_verified_at'=>now(),
            'phone'=>fake()->phoneNumber(),
            'company_id'=>random_int(1,7),
            'identifiant'=>fake()->unique()->ean8(),
            'password'=>Hash::make(Str::random(10)),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

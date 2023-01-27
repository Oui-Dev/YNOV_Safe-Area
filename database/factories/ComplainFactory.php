<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class ComplainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->sentence(),
            'content'=>fake()->sentence(),
            'user_id'=>User::first()->id,
            'user_reference'=>User::first()->reference,
            'complain_type_id'=>random_int(1, 3),
            'is_anonymous'=>random_int(0, 1),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $user = User::find(random_int(1, 20));

        return [
            'title'=>fake()->sentence(),
            'content'=>fake()->sentence(),
            'user_id'=>$user->id,
            'user_reference'=>$user->reference,
            'complain_type_id'=>random_int(1, 3),
            'is_anonymous'=>random_int(0, 1),
        ];
    }
}

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
class HelpDeskSupportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = ['incident', 'demande'];
        $status = ['nouveau', 'attribue', 'en cours', 'termine', 'clos'];

        return [
            'user_id'=>random_int(1, 20),
            'reference'=>substr(Uuid::uuid4()->toString(), 0, 6),
            'type'=>$type[random_int(0, 1)],
            'status'=>$status[random_int(0, 4)],
            'emergency'=>random_int(0, 4),
            'title'=>fake()->sentence(),
            'description'=>fake()->sentence(),
        ];
    }
}

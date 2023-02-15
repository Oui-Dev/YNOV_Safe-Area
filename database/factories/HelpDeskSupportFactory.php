<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Status;
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
            'status_id'=>Status::inRandomOrder()->first()->id,
            'is_urgent'=>random_int(0, 1),
            'title'=>fake()->sentence(),
            'description'=>fake()->sentence(),
        ];
    }
}

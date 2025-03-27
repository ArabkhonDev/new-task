<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id'=> rand(1, 15),
            'title'=> $this->faker->sentence,
            'body'=> fake()->sentence(3),
            'photo'=>$this->faker->url,
        ];
    }
}

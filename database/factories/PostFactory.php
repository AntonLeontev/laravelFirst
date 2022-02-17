<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>  $this->faker->realTextBetween(15, 45),
            'description' =>  $this->faker->realTextBetween(150, 500),
            'preview' =>  $this->faker->realText(150),
            'image' =>  $this->faker->imageUrl(640, 520),
        ];
    }
}

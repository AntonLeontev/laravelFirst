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
            'title' =>  $this->faker->text(30),
            'description' =>  $this->faker->text(400),
            'preview' =>  $this->faker->text(150),
            'image' =>  $this->faker->image('public/storage/posts', 640, 520, null, false),
        ];
    }
}

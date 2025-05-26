<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'category_id' => mt_rand(1, 2), // Assuming you have 2 categories created
            'user_id' => mt_rand(1, 5), // Assuming you have 5 users created
            'excerpt' => $this->faker->paragraph(),
            'slug' => $this->faker->slug(), 
            'body' => $this->faker->paragraphs(mt_rand(5, 10), true)
        ];
    }
}   

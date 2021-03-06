<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->unique()->slug(),
            'excerpt' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'user_id' => User::all()->random(1)[0]->id,
            'category_id' => Category::all()->random(1)[0]->id,
        ];
    }
}

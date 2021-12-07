<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment' => $this->faker->paragraphs(5, true),
            'post_id' => Post::all()->random(1)[0]->id,
            'user_id' => User::all()->random(1)[0]->id,
        ];
    }
}

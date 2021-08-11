<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'commented_by' => User::query()->inRandomOrder()->first()->id,
            'post_id' => Post::query()->inRandomOrder()->first()->id,
            'body' => $this->faker->realText(500),
        ];
    }
}

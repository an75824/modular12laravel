<?php

namespace App\Modules\Blog\Database\Factories;

use App\Modules\Blog\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->sentence,
        ];
    }
}

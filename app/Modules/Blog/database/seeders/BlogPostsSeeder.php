<?php

namespace App\Modules\Blog\database\seeders;

use Illuminate\Database\Seeder;
use App\Modules\Blog\Models\Post;

class BlogPostsSeeder extends Seeder
{
    public function run()
    {
        Post::factory()->count(5)->create();
    }
}

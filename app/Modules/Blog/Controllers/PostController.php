<?php

declare(strict_types=1);

namespace App\Modules\Blog\Controllers;

use App\Modules\Blog\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('blog::posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('blog::posts.show', compact('post'));
    }
}

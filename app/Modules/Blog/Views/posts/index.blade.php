@extends('templates.app')

@section('content')
    <h1>Blog Posts</h1>
    @foreach($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
            <p>{{ Str::limit($post->content, 100) }}</p>
            <a href="{{ route('blog.posts.show', $post->id) }}">Read more</a>
        </article>
    @endforeach
@endsection

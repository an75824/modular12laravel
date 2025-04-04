@extends('templates.app')

@section('content')
    <h1>A Blog Post</h1>
<p>{{$post->content}}</p>
@endsection

@extends('layouts.main')

@section('container')
    <h2>{{  $post['title']  }}</h2>
    <p>By <a class="text-decoration-none" href="#">{{ $post->user->name }}</a> <a class="text-decoration-none" href="/categories/{{ $post->category->slug  }}">{{ $post->category->name }}</a></p>
    <p>{!!$post->body  !!}z</p>

    <a class="text-decoration-none" href="/posts">Back to Main Page</a>
@endsection

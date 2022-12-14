@extends('layouts.main')

@section('container')
    <h2>{{  $post['title']  }}</h2>
    <p>By Wawan <a href="/categories/{{ $post->category->slug  }}">{{ $post->category->name }}</a></p>
    <p>{!!$post->body  !!}z</p>

    <a href="/posts">Back to Main Page</a>
@endsection

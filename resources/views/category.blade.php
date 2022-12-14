@extends('layouts.main')

@section('container')
    <h2 class="mb-5">Post Category : {{ $category }}</h2>
    @foreach ($posts as $post)
       <h2><a href="/posts/{{ $post->slug }}"> {{  $post->title  }}</a></h2>
       <h5>{{$post->author }}</h5> 
        <p>{{$post->excerpt}}</p>
    @endforeach
@endsection
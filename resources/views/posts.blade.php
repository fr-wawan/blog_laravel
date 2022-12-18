@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
       <h2><a class="text-decoration-none" href="/posts/{{ $post->slug }}"> {{  $post->title  }}</a></h2>
    <p>By <a class="text-decoration-none"  href="#">{{ $post->user->name }}</a> <a class="text-decoration-none"  href="/categories/{{ $post->category->slug  }}">{{ $post->category->name }}</a></p>
       <h5>{{$post->author }}</h5> 
        <p>{{$post->excerpt}}</p>

    
    <a class="text-decoration-none"  href="/posts/{{ $post->slug  }}">Read More...</a>
    <hr>
    @endforeach
@endsection
@extends('layouts.main')

@section('container')


<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h2 class="mb-3">{{ $post->title }}</h2>

      <p>By. <a class="text-decoration-none" href="#">{{ $post->author->name }}</a> In <a class="text-decoration-none"
          href="/posts?category={{ $post->category->slug  }}">{{ $post->category->name }}</a></p>

      <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
        class="img-fluid">

      <article class="my-3">
        <p>{!!$post->body !!}</p>
      </article>

      <a class="text-decoration-none" href="/posts">Back to Main Page</a>
    </div>
  </div>
</div>

@endsection
@extends('layouts.main')


@section('container')
<div class="p-5 bg-light text-dark w-50 m-auto rounded-4 my-5">
    <h1 class=" my-5">Halaman {{  $title  }}</h1>
    <p class="lh-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium, obcaecati ut voluptatem animi beatae delectus vel rerum dolores doloremque corrupti dignissimos velit esse excepturi mollitia eius harum maiores est sequi.</p>
    <button class="btn btn-outline-primary p-3 my-5">Read More</button>
</div>
@endsection
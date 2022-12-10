@extends('layouts.main')

@section('container')
    <div class="p-5 bg-dark w-50 m-auto my-5 text-light rounded-3">
        <h1 class="mb-5">Halaman {{$title  }}</h1>
        <h3 class="mb-3">Nama : {{ $name }}</h3>
        <h3 class="mb-3">Umur : {{ $umur }}</h3>
        <p class="text-start my-5 lh-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates perferendis placeat reiciendis obcaecati expedita accusamus? Nesciunt quasi perspiciatis voluptatum expedita nam molestiae laborum veniam impedit? Soluta repudiandae placeat distinctio laudantium.</p>
    <button class="btn btn-outline-light">Read More</button>
    </div>
@endsection

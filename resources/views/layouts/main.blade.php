<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title  }} | Laravel</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
</head>

<body>
@include('partials/navbar')
<div class="container mt-5">
@yield('container')
</div>
</body>

</html>
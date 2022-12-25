@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5 my-5">
    <main class="form-registration w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
      <form action="/register" method="post">

        @csrf

        <div class="form-floating">
          <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
            placeholder="Name" name="name" required value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" class="form-control  @error('username') is-invalid @enderror" id="username"
            placeholder="Name" name="username" required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
            placeholder="name@example.com" name="email" required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror"
            id="password" placeholder="Password" name="password" required value="{{ old('password') }}">
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button class="w-100 mt-3 btn btn-lg rounded btn-dark" type="submit">Register</button>
      </form>

      <small class="mt-3 d-block">Already registered? <a href="/login" class="text-decoration-none">Login</a></small>
    </main>
  </div>
</div>

@endsection
@extends('layouts.main')

    @section('container')

    <div class="row justify-content-center">
      <div class="col-lg-5 ">
        <div class="form-registration mx-auto text-center">
          <div class="mt-5"><i class="loginIcon bi bi-box-arrow-in-right" ></i></div>
          <h1 class="h3 mb-3 mt-2 fw-normal text-center">Register</h1>
          <form action="/register" method="post">
            @csrf
            <div class="form-floating pb-3">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
              <label for="name">Name</label>
              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating pb-3">
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
              <label for="Username">Username</label>
              @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating pb-3">
                <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email</label>
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating pb-3">
                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="confirm_password" class="form-control  @error('confirm_password') is-invalid @enderror" id="confirm_password" placeholder="Confirm Password" required>
              <label for="confirm_password">Confirm Password</label>
            @error('confirm_password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register Now!</button>
          </form>
          <small class="d-block text-center mt-2">Already Registered? <a href="/login" class="text-decoration-none">Login</a></small>
        </div>
      </div>
    </div>
    @endsection
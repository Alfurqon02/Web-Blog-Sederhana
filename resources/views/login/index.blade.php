@extends('layouts.main')

    @section('container')

    <div class="row justify-content-center">
      <div class="col-md-5 ">

        @if(session('success'))
        <div class="alert alert-success mt-5" role="alert">
          {{ session('success') }}
        </div>
        @endif

        @if(session('failed'))
        <div class="alert alert-danger mt-5" role="alert">
          {{ session('failed') }}
        </div>
        @endif

        <div class="form-signin mx-auto text-center">
          <div class="mt-5"><i class="loginIcon bi bi-box-arrow-in-right" ></i></div>
          <h1 class="h3 mb-3 mt-2 fw-normal text-center">Please Login</h1>
          <form action="/login" method="post">
            @csrf
            <div class="form-floating">
              <input type="text" name="username" class="form-control" id="username" placeholder="Username" required value="{{ old('username') }}">
              <label for="Username">Username</label>
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          </form>
          <small class="d-block text-center mt-2">Not Registered? <a href="/register" class="text-decoration-none">Register Now!</a></small>
        </div>
      </div>
    </div>

    @endsection
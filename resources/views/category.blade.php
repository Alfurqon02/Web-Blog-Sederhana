@extends('layouts.main')
    @section('container')
        <h1 class="mt-5 pt-5">All Category</h1>

        @foreach ($categories as $category)
        <div>
            <a href="/posts?category={{ $category->slug }}">
            <div class="card bg-dark mb-5 mt-5">
              <img src="https://source.unsplash.com/1200x400?{{ $category->name }}" class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h1 class="card-title text-white text-center flex-fill p-4" style="background-color: rgba(43, 41, 41, 0.5)">{{ $category->name }}</h1>
                </div>
              </div>
            </a>
            </div>
        @endforeach

    @endsection
@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-5 mt-5">{{ $title }}</h1>
                <article>
                    <h5>By: <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a></h5>
                    <h6 class="mb-5">Category: <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                    <img class="mb-3 img-fluid" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="">
                    <article class="my-3 fs-5">{!! $post->body !!}</article>    
                </article>

                <a href="javascript:history.back()" class="d-block mt-5 mb-5 btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
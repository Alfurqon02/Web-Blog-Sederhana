@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3 mt-5">{{ $post->title }}</h1>
            <article>
                <a href="/dashboard/posts" class="btn btn-success mb-2"><i class="bi bi-arrow-left"></i> Back to My Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-2"><i class="bi bi-pencil"></i> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger mb-2" onclick="return confirm('Are You Sure to Delete this Post?')"><i class="bi bi-trash3"></i> Delete</i></button>
                </form>
                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img class="mb-3 img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                </div>
                @else
                    <img class="mb-3 img-fluid" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">
                @endif
                
                <article class="my-3 fs-5">{!! $post->body !!}</article>
            </article>
        </div>
    </div>
</div>

@endsection
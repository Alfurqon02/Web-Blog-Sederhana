@extends('layouts.main')
    @section('container')

    {{-- @if (request('category'))
    <h1 class="mb-5 mt-5">Post In {{}}</h1>
    
    @elseif (request('user'))
    <h1 class="mb-5 mt-5">{{ $user->name }}'s Posts</h1>

    @else --}}
   
    <h1 class="mb-5 mt-5 pt-5">{{ $title }}</h1>

    {{-- @endif --}}
    {{-- @if (request('kategori')){
      <input type="hidden" name="kategori" value="{{ request('kategori') }}">
    } --}}
      
    {{-- @endif --}}

    @if ($posts->count())
    <div class="card mb-5">
      @if ($posts[0]->image)
      <div style="max-height: 400px; overflow:hidden;">
          <img class="mb-3 img-fluid" src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
      </div>
      @else
      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
      @endif
        <div class="card-body text-center">
          <h3 class="card-title"><a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
          <small class="text-muted">
            <a href="/posts?user={{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a><br>
            <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
          </small>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
          <small>
            <p align='right' class="card-text mt-3">Created at {{ $posts[0]->created_at->diffForHumans() }}</p>
          </small>
        </div>
      </div>
    

        <div class="container">
          <div class="row">
              @foreach ($posts->skip(1) as $post )
              <div class="col-md-3 mb-5">
                <div class="card">
                  @if ($post->image)
                    <img class="mb-3 img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                  @else
                    <img src="https://source.unsplash.com/500x283?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                  @endif
                   <div class="card-body">
                     <h5 class="card-title">{{ $post->title }}</h5>
                      <p>
                        <small class="text-muted">
                          By. <a href="/posts?user={{ $post->user->username }}"
                          class="text-decoration-none">{{ $post->user->name }}</a><br>
                          Category: <a href="/posts?category={{ $post->category->slug }}"
                          class="text-decoration-none">{{ $post->category->name }}</a>
                        </small>
                      </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                </div>
              </div>
           </div>
              @endforeach
          </div>
        </div>


    @else
      <p class="text-center fs-4">No Post Found.</p>
    @endif

    <div class="d-flex justify-content-center">
      {{ $posts->links() }}
    </div>

    {{-- {{ $posts->links() }} --}}
        {{-- @foreach ($posts->skip(1) as $post)
            <article class="mb-5 border-bottom pb-3">
                <h2>
                <a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->judul }}</a> 
                </h2>
            <h6>by: <a href="/user/username={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a></h6>
            <h6>Categroy: <a href="kategori/{{ $post->kategori->slug_kategori }}" class="text-decoration-none">{{ $post->kategori->nama_kategori }}</a></h6>
            <p>{{ $post->kutipan }}</p>
            <a href="/blog/{{ $post->slug }}">Read More...</a>
            </article>
        @endforeach --}}

    @endsection

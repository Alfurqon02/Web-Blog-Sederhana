@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post</h1>
  </div>

  <div class="table-responsive col-lg-15">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3"><i class="bi bi-plus-lg"></i> Add New Post</a>
    
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <table class="table table-striped table-sm" id="example">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Post ID</th>
          <th scope="col">Tittle</th>
          <th scope="col">Category</th>
          <th scope="col">Author</th>
          <th scope="col">Action</th>
        </tr>
        {{-- <tr class="filters">
          <th></th>
          <th><input type="text" class="form-control filter-input" placeholder="search.." data-column="1"></th>
          <th><input type="text" class="form-control filter-input" placeholder="search.." data-column="2"></th>
          <th><input type="text" class="form-control filter-input" placeholder="search.." data-column="3"></th>
          <th><input type="text" class="form-control filter-input" placeholder="search.." data-column="4"></th>
        </tr> --}}
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>{{ $post->user->name }}</td>
            <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure to Delete this Post?')"><i class="bi bi-trash3"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
{{-- 
<script src="//cdn.datatables.net/1.10.16/js/jquery.datatables.js"></script> --}}

@endsection
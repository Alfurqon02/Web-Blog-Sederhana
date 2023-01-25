@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Manage User</h1>
  </div>
    
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">User ID</th>
          <th scope="col">Username</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="/dashboard/users/posts/{{ $user->username }}" class="badge bg-primary"><i class="bi bi-book"></i></a>
                <a href="/dashboard/users/profile/{{ $user->username }}" class="badge bg-success"><i class="bi bi-person"></i></a>
                <form action="/dashboard/posts/{{ $user->username }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure to Delete this Post?')"><i class="bi bi-x-circle"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
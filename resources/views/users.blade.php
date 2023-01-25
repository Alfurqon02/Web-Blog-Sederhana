@extends('layouts.main')
    @section('container')
    <h1 class="mb-5 mt-5">{{ $title }}</h1>

@foreach ($users as $user)
<h5>{{ $user->name }}</h5>
<small>
<p>{{ $user->username }}<br>
{{ $user->email }}</p>
<hr>
</small>    
@endforeach


    @endsection